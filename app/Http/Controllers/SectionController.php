<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Http\Requests\StoreSectionRequest;
use App\Http\Requests\UpdateSectionRequest;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
class SectionController extends Controller
{
    public function index()
    {
        return view('sections.index');
    }
    public function data()
    {
        $section = Section::latest()->select();
        return DataTables::of($section)
            ->addIndexColumn()
            ->editColumn('created_at', function (Section $section) {
                return $section->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'sections.data_table.actions')
            ->rawColumns(['actions'])
            ->toJson();
    }
    public function create()
    {
        return view('sections.create');
    }
    public function store(StoreSectionRequest $request)
    {
        $section = $request->all();
        Section::create($section);
        toastr()->success(__('تم اضافه القسم بنجاح'));
        return redirect('section');
    }
    public function show(Section $section)
    {
        //
    }
    public function edit($id)
    {
        $section = Section::findorfail($id);
        return view('sections.edit',compact('section'));
    }
    public function update(StoreSectionRequest $request, $id)
    {
        $section = Section::findorfail($id);
        $section->section_name = $request->section_name;
        $section->update();

        toastr()->success(__('تم تعديل القسم بنجاح'));
        return redirect('section');
    }
    public function destroy($id)
    {
        $section = Section::destroy($id);
        toastr()->error(__('تم حذف القسم بنجاح'));
        return redirect('section');
    }
}
