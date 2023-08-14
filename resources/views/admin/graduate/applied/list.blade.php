@extends('layout.admin')

@section('stylesheet')
  <!-- DataTables -->
  <link href="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css"/>
  <link href="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css"/>

  <link href="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css"/>

  <style>
    /*#datatable-buttons td*/
    /*{*/
    /*    text-align: center;*/
    /*    vertical-align: middle;*/
    /*}*/
    /*#datatable-buttons a*/
    /*{*/
    /*    !*width: 100%;*!*/
    /*    display: block;*/
    /*}*/

  </style>
@endsection

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <section class="panel">
            <header class="panel-heading">
              <h2 class="panel-title">Applied Jobs</h2>
            </header>
            <div class="panel-body">
              @if(session()->has('status'))
                {!! session()->get('status') !!}
              @endif
              <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12 text-right mb-3">
                  {{--                  <a href="{{ route('admin.event.job.create') }}" class="brn btn-success btn-sm">New Event</a>--}}
                </div>
              </div>
              <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                     cellspacing="0" width="100%" style="font-size: 14px">

                <thead>
                <tr>
                  <th width="50">#</th>
                  <th>Name</th>
                  <th>Job Title</th>
                  <th>Company</th>
                  <th width="200">Position</th>
                  <th>Resume</th>
                  <th>Status</th>
                  {{--                  <th class="hidden-phone" width="40">Option</th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($appliedStudents as $key => $val)
                  <tr class="@if(($key%2) == 0)gradeX @else gradeC @endif">
                    <td class="p-1">{{ ($key+1) }}</td>
                    <td class="p-1 text-capitalize">{{ $val->graduate?->name_en }}</td>
                                        <td class="p-1 text-capitalize"><a class="text-primary" href="{{route('job_post_details',$val->post_id)}}">{{ $val->post?->job_title }}</a></td>

                    {{--  <td class="p-1 text-capitalize">{{ $val->post?->job_title }}</td>  --}}
                    <td class="p-1 text-capitalize">{{ $val->post?->company_name }}</td>
                    {{--  <td class="p-1 text-capitalize"><a class="text-primary" href="{{route('job_post_details',$val->post_id)}}">{{ $val->post?->user?->name_en }}</a></td>  --}}
                    <td class="p-1">{{ $val->post?->position }}</td>
                    <td class="p-1"><a href="{{ asset($val->graduate?->cv) }}" download><i class="fa fa-download"></i>&nbsp; Download</a></td>

                    @if(\App\Helper\CustomHelper::canView('Manage Institute', 'Institute Head'))
                      <td class="text-capitalize p-1">
                        <div class="col-span-6 sm:col-span-4">
                          <div class="form-group">
                            <select name="institue_acceptance" data-id="{{$val->id}}"
                                    class="institue_acceptance border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full @error('institue_acceptance') is-invalid @enderror">
                              @foreach(App\Models\PostHasStudent::$instituteAcceptances as $item)
                                <option class="text-capitalize" value="{{ $item }} "
                                  @selected($item == old('institue_acceptance', $val->institue_acceptance))>{{ ucfirst($item) }}</option>
                              @endforeach
                            </select>
                            @error('institue_acceptance')
                            <strong class="text-danger">{{ $errors->first('institue_acceptance') }}</strong>
                            @enderror
                          </div>
                        </div>
                      </td>

                    @else
                      <td class="text-capitalize p-1">
                        <div class="onoffswitch">
                          <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox"
                                 @checked($val->status == \App\Models\User::$statusArrays[1])
                                 data-id="{{ $val->id }}"
                                 id="myonoffswitch{{ ($key+1) }}">
                          <label class="onoffswitch-label" for="myonoffswitch{{ ($key+1) }}">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                          </label>
                        </div>
                      </td>
                    @endif
                    {{--                    <td class="p-1">{{ $val->status }}</td>--}}
                    {{-- <td class="p-1 text-capitalize">{{ \App\Helper\CustomHelper::userRoleName($val) }}</td>--}}
                    {{--                                        <td width="200" class="p-1">{{ date('F d, Y h:i A', strtotime($val->created_at)) }}</td>--}}
                    {{--                    <td class="p-1 text-capitalize">{{ $val->status }}</td>--}}
                    {{--                    @endif--}}
                    {{--                    @if(\App\Helper\CustomHelper::canView('Manage Industry Post|Delete Industry Post', 'Industry'))--}}
                    {{--                      <td class="text-center p-1" width="100">--}}
                    {{--                        @if(\App\Helper\CustomHelper::canView('Manage Industry Post', 'Industry'))--}}

                    {{--                          <a href="{{ route('admin.event.job.manage',$val->id) }}"--}}
                    {{--                             class="btn btn-sm btn-primary"> <i class="fa fa-cogs"></i> </a>--}}
                    {{--                        @endif--}}
                    {{--                        @if(\App\Helper\CustomHelper::canView('Delete Industry Post', 'Industry'))--}}
                    {{--                          <span class="btn btn-sm btn-danger btn-delete delete_{{ $val->id }}" style="cursor: pointer"--}}
                    {{--                                data-id="{{ $val->id }}"><i--}}
                    {{--                              class="fa fa-trash-o"></i></span> --}}
                    {{--                        @endif--}}
                    {{--                      </td>--}}
                    {{--                    @endif--}}
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="userDeleteModal" tabindex="-1" role="dialog" aria-labelledby="userDeleteModal"
       aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4>Delete Event</h4>
        </div>
        <div class="modal-body">
          <strong>Are you sure to delete this event?</strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No</button>
          <button type="button" class="btn btn-success btn-sm yes-btn">Yes</button>
        </div>
      </div>
    </div>
  </div>
@endsection


@section('script')
  {{-- institute acceptance --}}
  <script>
    $(document).ready(function () {
      $('#member-dropdown').select2()
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
      $(document).on('change', ".institue_acceptance", function () {
        let id = $(this).data('id');
        let value = $(this).val();
     
        $.ajax({
          url: "{{ route('admin.ajax.update.instituteAcceptance.status') }}",
          method: "post",
          dataType: "html",
          data: {'id': id, 'status': value},
          success: function (data) {
            if (data === "success") {
              Toast.fire({
                icon: 'success',
                text: 'Successfully changed.'
              })
            }
          }
        });
      })
    });
  </script>

  <!-- Required datatable js -->
  <script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
  <!-- Buttons examples -->
  <script src="{{ asset('assets/admin/plugins/datatables/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/datatables/jszip.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/datatables/pdfmake.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/datatables/vfs_fonts.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/datatables/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/datatables/buttons.print.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/datatables/buttons.colVis.min.js') }}"></script>
  <!-- Responsive examples -->
  <script src="{{ asset('assets/admin/plugins/datatables/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/select2/js/select2.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

@endsection
