@extends('layouts.master')

@section('main-content')
    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    Products </h3>
                <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="{{route('product.index')}}" class="kt-subheader__breadcrumbs-link">
                        Products </a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="" class="kt-subheader__breadcrumbs-link">
                        Show </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end:: Subheader -->
    <div class="kt-portlet__body">
            <!--Begin:: Tab Content-->
            @if (session()->has('success'))
                <div class="alert alert-success fade show" role="alert">
                    <div class="alert-text"><strong>
                            {!! session()->get('success') !!} !!
                        </strong></div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="la la-close"></i></span>
                        </button>
                    </div>
                </div>
            @endif
            <div class="tab-pane active" id="kt_apps_contacts_view_tab_2" role="tabpanel">
                {{--<div class="row">--}}
                    <div class="col-xl-6">
                        <!--begin::Portlet-->
                        <div class="kt-portlet">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">
                                        Show Products
                                    </h3>
                                </div>

                            </div>
                            <div class="kt-portlet__body">

                                <!--begin::Section-->
                                <div class="kt-section">
                                    <div class="kt-section__content">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>Images</th>
                                             </tr>
                                            </thead>
                                            <tbody>
                                            <?php $checked = ($product->status == 1) ? 'Active' : 'Inactive'; ?>
                                              <tr>
                                                    <td>{{ $product->name }}</td>
                                                    <td>{{ $product->cat->name }}</td>
                                                    <td>{{ $checked }}</td>
                                                  {{--<td>--}}
                                                      {{--@foreach($productimage as $img)--}}
                                                          {{--<img src="/uploads/products/{{$img['images']}}" height="50px" width="50px" style="margin:10px;"/>--}}
                                                      {{--@endforeach--}}
                                                  {{--</td>--}}
                                                  <td>
                                                      @foreach ($product->image as $img)
                                                      <img src="/uploads/products/{{ $img->images }}" height="50px" width="50px" style="margin:10px;">
                                                  @endforeach
                                                  </td>
                                                </tr>
                                           </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!--end::Section-->
                            </div>

                            <!--end::Form-->
                        </div>

                        <!--end::Portlet-->

                    </div>
                {{--</div>--}}

            </div>
            <!--end:: Tab Content-->
        {{--</div>--}}
    </div>
{{--</div>--}}
@endsection
<script>
    setTimeout(function() {
        $('#alert').fadeOut('fast');
    }, 1500);
</script>
