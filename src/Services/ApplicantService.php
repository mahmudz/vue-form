<?php


namespace Mahmudz\VueForm\Services;


use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Mahmudz\VueForm\Models\Applicant;
use Mahmudz\VueForm\Models\Education;
use Mahmudz\VueForm\Models\Experience;

class ApplicantService
{
    /**
     * @param Request $request
     * @throws Exception
     */
    public function create(Request $request)
    {
        $avatarPath = '';
        $nidFrontPath = '';
        $nidBackPath = '';
        try {
            DB::beginTransaction();
            $applicant = Applicant::create($request->only(['name', 'email', 'phone', 'nid_no']));

            if ($request->hasFile('avatar')) {
                $avatarPath = $request->file('avatar')->store('images');
                $applicant->avatar = $avatarPath;
            }

            if ($request->hasFile('avatar')) {
                $nidFrontPath = $request->file('nid_front')->store('images');
                $applicant->nid_front = $nidFrontPath;
            }

            if ($request->hasFile('avatar')) {
                $nidBackPath = $request->file('nid_back')->store('images');
                $applicant->nid_back = $nidBackPath;
            }
            $applicant->save();

            $educations = json_decode($request->educations, true);
            foreach ($educations as $education) {
                Education::create(array_merge($education, ['applicant_id' => $applicant->id]));
            }

            $experiences = json_decode($request->experiences, true);
            foreach ($experiences as $experience) {
                Experience::create(array_merge($experience, ['applicant_id' => $applicant->id]));
            }

            DB::commit();
        }catch (Exception $e) {
            DB::rollBack();
            Storage::delete($avatarPath);
            Storage::delete($nidFrontPath);
            Storage::delete($nidBackPath);

            throw new Exception($e);
        }
    }
}