<?php

namespace App\Http\Controllers\Panel;

use App\Model\Category;
use App\Model\Filter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filters=Filter::paginate(20);
        return view('Panel.Filter.FilterList',compact('filters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $filters = Filter::all();
        return view('Panel.Filter.AddFilter', compact('categories', 'filters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category_id = $request->category_id;
        $parent_id = $request->parent_id;
        $title_fas = $request['title_fa'];
        $title_ens = $request['title_en'];
        $types = $request['type'];
        if (is_array($title_fas)) {
            foreach ($title_fas as $k => $value) {
                $title_en = array_key_exists($k, $title_ens) ? $title_ens[$k] : 'ندارد';
                $type = array_key_exists($k, $types) ? $types[$k] : 'ندارد';

                Filter::create([
                    'category_id' => $category_id,
                    'parent_id' => $parent_id,
                    'title_fa' => $value,
                    'title_en' => $title_en,
                    'type' => $type
                ]);
            }
        }
        return redirect(route('filter.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $filter
     * @return \Illuminate\Http\Response
     */
        public function show(Filter $filter)
    {
        return response()->json($filter);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $filter
     * @return \Illuminate\Http\Response
     */
    public function edit(Filter $filter)
    {
        $categories=Category::all();
        $filters=Filter::all();
        return view('Panel.Filter.EditFilter',compact('filter','filters','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $filter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filter $filter)
    {
        $filter->update([
            'category_id' => $request->input('category_id'),
            'parent_id' => $request->input('parent_id'),
            'title_fa' => $request->input('title_fa'),
            'title_en' => $request->input('title_en'),
            'type' => $request->input('type')
        ]);
        return redirect(route('filter.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $filter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filter $filter)
    {
        $filter->delete();
        return redirect(route('filter.index'));
    }
}
