<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKitRequest;
use App\Http\Requests\UpdateKitRequest;
use App\Models\Category;
use App\Models\Country;
use App\Models\Kit;
use App\Models\SubCategory;
use App\Models\WorkCenter;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class KitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $kits = Kit::latest()->paginate(5);

        return view('kits.index',compact('kits'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('kits.create',[
            'kit' => new Kit,
            'workCenters' => WorkCenter::all(),
            'categories' => Category::all(),
            'subCategories' => SubCategory::all(),
            'countries' => Country::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreKitRequest $request
     * @return RedirectResponse
     */
    public function store(StoreKitRequest $request): RedirectResponse
    {
        $kit =$request->createKit();
        return redirect()
            ->route('kits.create')
            ->with('status', 'The Kit has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param Kit $kit
     * @return Response
     */
    public function show(Kit $kit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Kit $kit
     * @return Response
     */
    public function edit(Kit $kit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateKitRequest $request
     * @param Kit $kit
     * @return Response
     */
    public function update(UpdateKitRequest $request, Kit $kit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Kit $kit
     * @return Response
     */
    public function destroy(Kit $kit)
    {
        //
    }
}
