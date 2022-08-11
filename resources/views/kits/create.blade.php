@extends('adminlte::page')
@section('title', 'Kits')


@section('content_header')
    <h2>Kits Data</h2>
@stop

@section('content')
    <div class="container">
        {{old('sub_category_id')}}
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Kits') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                        @endif

                        <form method="POST" action="{{ route('kits.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="work_center_id"
                                           class="col-form-label text-md-end">{{ __('Work Center') }}</label>

                                    <select name="work_center_id" aria-label="select workCenter"
                                            class="form-select @error('work_center_id') is-invalid @enderror" >
                                        <option value="">--Select Work Center</option>
                                        @foreach ($workCenters as $workCenter)
                                            <option value="{{ $workCenter->id }}"
                                                {{ old('work_center_id',$kit->work_center_id)==$workCenter->id ? 'selected':''}}>
                                                {{ $workCenter->name }}</option>
                                        @endforeach
                                    </select>


                                    @error('work_center_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="LCN" class="col-form-label text-md-end">{{ __('LCN') }}</label>

                                    <input id="LCN" type="text" class="form-control @error('LCN') is-invalid @enderror"
                                           name="LCN" value="{{ old('LCN') }}"  autocomplete="LCN" autofocus>

                                    @error('LCN')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="partsLCN"
                                           class="col-form-label text-md-end">{{ __('Parts LCN') }}</label>

                                    <input id="partsLCN" type="text"
                                           class="form-control @error('partsLCN') is-invalid @enderror" name="partsLCN"
                                           value="{{ old('partsLCN') }}"  autocomplete="partsLCN" autofocus>

                                    @error('partsLCN')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="brand" class="col-form-label text-md-end">{{ __('Brand') }}</label>

                                    <input id="brand" type="text"
                                           class="form-control @error('brand') is-invalid @enderror" name="brand"
                                           value="{{ old('brand') }}"  autocomplete="brand" autofocus>

                                    @error('brand')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="model" class="col-form-label text-md-end">{{ __('Model') }}</label>

                                    <input id="model" type="text"
                                           class="form-control @error('model') is-invalid @enderror" name="model"
                                           value="{{ old('model') }}"  autocomplete="model" autofocus>

                                    @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{--Categories and Subcategories--}}
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="category_id"
                                           class="col-form-label text-md-end">{{ __('Category') }}</label>

                                    <select name="category_id" aria-label="select category" id="category_id"
                                            class="form-select @error('category_id') is-invalid @enderror">
                                        <option value="">--Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ old('category_id',$kit->category_id)==$category->id ? 'selected':''}}>
                                                {{ $category->name }}</option>
                                        @endforeach

                                    </select>

                                    @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="sub_category_id"
                                           class="col-form-label text-md-end">{{ __('Sub Category') }}</label>
                                    <select name="sub_category_id" aria-label="select subCategory" id="sub_category_id"
                                            class="form-select @error('sub_category_id') is-invalid @enderror">
                                        @if (old('sub_category_id'))
                                            @foreach ($subCategories as $subCategory)
                                                <option value="{{ $subCategory->id }}"
                                                    {{ old('sub_category_id',$kit->category_id)==$subCategory->id ? 'selected':''}}>
                                                    {{ $subCategory->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>

                                    @error('sub_category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{--Product Serial Number and Country Origin--}}
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="productSerialNumber"
                                           class="col-form-label text-md-end">{{ __('Product Serial Number') }}</label>

                                    <input id="productSerialNumber" type="text"
                                           class="form-control @error('productSerialNumber') is-invalid @enderror"
                                           name="productSerialNumber" value="{{ old('productSerialNumber') }}"
                                           autocomplete="productSerialNumber" autofocus>

                                    @error('productSerialNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="country_id"
                                           class="col-form-label text-md-end">{{ __('Country Origin') }}</label>

                                    <select name="country_id" aria-label="select country"
                                            class="form-select @error('country_id') is-invalid @enderror" >
                                        <option value="">--Select Country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}"
                                                {{ old('country_id',$kit->country_id)==$country->id ? 'selected':''}}>
                                                {{ $country->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('country_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{--Date Manufactured and Is completed--}}
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="dateManufactured"
                                           class="col-form-label text-md-end">{{ __('Date Manufactured') }}</label>

                                    <input id="dateManufactured" type="date"
                                           class="form-control @error('dateManufactured') is-invalid @enderror"
                                           name="dateManufactured" value="{{ old('dateManufactured') }}"
                                           autocomplete="dateManufactured" autofocus>

                                    @error('dateManufactured')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="mt-3">&nbsp;</div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" type="checkbox" name="isComplete"
                                               id="isCompleted" {{ old('isCompleted') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="isCompleted">
                                            {{ __('Is Completed') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{--Estimated Retail Price and Notes--}}
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <label for="estimatedRetailPrice"
                                           class="col-form-label text-md-end">{{ __('Estimated Retail Price') }}</label>

                                    <input id="estimatedRetailPrice" type="number"
                                           class="form-control @error('estimatedRetailPrice') is-invalid @enderror"
                                           name="estimatedRetailPrice" value="{{ old('estimatedRetailPrice') }}"
                                           autocomplete="estimatedRetailPrice" autofocus>

                                    @error('estimatedRetailPrice')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="notes" class="form-label">Notes</label>
                                    <textarea name=notes class="form-control @error('notes') is-invalid @enderror" id="notes"
                                              placeholder="Add notes" rows="3">{!! old('notes', $kit->notes) !!}</textarea>

                                    @error('notes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')

    <script>
        $('body').Layout('fixLayoutHeight')
    </script>
    <script>
        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        document.getElementById('category_id').addEventListener('change', (e)=>{
            fetch('/subcategories', {
                method: 'POST',
                body: JSON.stringify({text: e.target.value}),
                headers:{
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": token
                }
            }).then(response=>{
                return response.json()
            }).then(data =>{
                let options = "";
                for (let i in data.list){
                    options += '<option value="'+data.list[i].id+'">'+data.list[i].name+'</option>';
                }
                document.getElementById('sub_category_id').innerHTML = options
            }).catch(error => console.log(error))
        })
    </script>
@stop


