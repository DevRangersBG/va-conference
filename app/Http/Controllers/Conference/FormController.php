<?php

namespace App\Http\Controllers\Conference;
use App\Http\Controllers\Controller;
use App\Http\Requests\Conference\StoreFormRequest;
use App\Models\Conference\Form;
use App\Models\Conference\ParticipantType;
use App\Models\Conference\ThematicArea;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Notifications\NotifyOnFormSubmit;
use Illuminate\Support\Facades\Redirect;

class FormController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $participantTypes = ParticipantType::get();
        $thematicAreas = ThematicArea::get()->skip(1);

        return view('dashboard', compact('participantTypes', 'thematicAreas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormRequest $request): RedirectResponse
    {
        $participantType = ParticipantType::findOrFail($request->participant_type);
        $thematicArea = ThematicArea::find($request->thematic_area);

        if ($request->hasFile('report_file_path')) {
            $reportFilePath = $request->file('report_file_path');

            $reportFilePath = Storage::disk('public')->putFileAs('/reports', $reportFilePath, str()->uuid(). '.' .
                $reportFilePath->extension());
        }

        if (! empty($request->file('report_file_path')) && $request->file('report_file_path')->getError() > 0) {
            return Redirect::back()->withInput()->with('error', $request->file('report_file_path')->getErrorMessage() );
        }

        if ($participantType->id === 1 && empty($request->file('report_file_path'))) {
            return back()->withInput()->with('error', 'Report file is mandatory for authors/co-authors' );
        }

        $form = Form::create([
            'user_id' => Auth::id(),
            'first_name' => $request->first_name,
            'surname' => $request->surname,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'participant_type_id' => $participantType->id,
            'report_title' => $request->report_title ?? null,
            'report_file_path' => $reportFilePath ?? null,
            'report_details' => $request->report_details ?? null,
            'keywords' => $request->keywords ?? null,
            'thematic_area_id' => $thematicArea->id ?? 1,
            'has_certificate' => $request->certificate,
        ]);

        $form->save();

        $user = Auth::user();
        $user->notify(new NotifyOnFormSubmit());

        return redirect()->route('dashboard', app()->getLocale())->with('success', 'Form submitted successfully!');
    }

    public function downloadReport ()
    {
        // TODO get report file path in variable $reportFilePath
        /*$fileDate = 'report-' . date('d-m-Y-H-i-s'). '.docx';
        // download file with generated name report-29-02-2024-16-06-39.docx
        return response(file_get_contents( public_path('storage') .'/'. $reportFilePath),200,['Content-Type' =>
            'application/vnd.openxmlformat-officedocument.wordprocessingml.document', 'Content-Disposition' => "attachment; filename=$fileDate"]);*/
    }
}
