<div class="leadModel contact-page__form contact-form-validated form-one" >
    <div class="row">
        <div class="col-md-7">
            <div class="leadModelHeader">
                <div class="headerLogo">
                    <a class="td_site_branding td_accent_color" href="{{ url('/') }}">
                        <img src="{{ url('assets/logo/logo.gif') }}" class="width-100">                         
                    </a> 
                </div>
            </div>
            <div class="leadModelBody">
                <div class="">
                    <a >Contact Details</a>
                </div>
                
                <form id="leadCaptureForm" class="" action="{{ route('capture-lead')}}" method="post" >
                    @csrf
                    <div class="form-one__group">
                        <div class="lead_steps step_1 active">
                            <h3 class="td_mb_20 td_fs_24 td_semibold">Let’s get you started!</h3>
                            <div class="row td_mb_10 td_row_gap_16">
                                <div class="col-md-6 mb-2">
                                    <input type="text" name="lead_full_name" class="td_form_field_2 td_mb_16" placeholder="Enter Full name" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <input type="text" name="lead_email" class="td_form_field_2 td_mb_16" placeholder="Enter Email Address" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <input type="hidden" name="lead_mobile_number[0]" value="+91"><input type="tel" id="lead_mobile_info" name="lead_mobile_number[1]" class="td_form_field_2 td_mb_16" placeholder="Enter Mobile Number" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <input type="tel" name="lead_pincode" min="000000" min="999999" class="td_form_field_2 td_mb_16" placeholder="Enter Pincode" required>
                                </div>
                                @if(isset($institute))
                                <input type="hidden" name="institute" value="{{ $institute }}" >
                                @endif
                            </div>
                            <p class="td_fs_14 td_mb_20 mt-3">By entering the OTP and clicking continue I confirm that I have read, understood and agree with the Terms and Conditions and Privacy Policy.</p>
                            <div class="row align-items-center td_row_reverse_lg td_gap_y_20">
                                <div class="col-lg-6 text-center-lg">
                                
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-one__control form-one__control--full">
                                        <button type="submit" class="eduhive-btn">
                                            <span>Continue OTP</span>
                                            <span class="eduhive-btn__icon"><i class="icon-right-up"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lead_steps step_2">
                            <h3 class="td_mb_20 td_fs_24 td_semibold">We’ve sent you an OTP</h3>
                            <p class="td_fs_14 m-0">On your phone number <a href="javascript:void(0)" class="backstep">+91 <span class="submitted_lead_mobile_no">62905-65997</span> <i class="fa fa-edit" ></i> </a></p>
                            <div id="otp_target"></div>
                            <label id="otp_target-error" class="otp_error" style="display:none">Please Enter valid OTP</label>
                            <div class="otp-content">
                                <p class="message"> Did not receive OTP?
                                    <span class="countdown_label"> Resend in <span class="countdown" >59</span> Sec </span>
                                    <a class="resendOtp display-none" href="javascript:void(0)"> Resend OTP </a>
                                </p>
                            </div>
                            <p class="td_fs_14 td_mb_20 mt-3">By entering the OTP and clicking continue I confirm that I have read, understood and agree with the Terms and Conditions and Privacy Policy.</p>
                            <div class="row align-items-center td_row_reverse_lg td_gap_y_20">
                                <div class="col-lg-6 text-center-lg">
                                
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-one__control form-one__control--full">
                                        <button type="submit" class="eduhive-btn">
                                            <span>Register Now</span>
                                            <span class="eduhive-btn__icon"><i class="icon-right-up"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" class="formFieldOtpResponse" >
                        <input type="hidden" class="lead_id" name="lead_id"> 
                    </div>
                    <input type="hidden" name="utm_campaign" value="{{ getUtmCampaign(isset($contentMain->utm_campaign)?$contentMain->utm_campaign:null) }}">
                    <input type="hidden" name="utm_source" value="{{ getUtmSource(isset($contentMain->utm_source)?$contentMain->utm_source:null) }}">
                    <input type="hidden" name ="LeadType" value="{{ getCommunicationMedium(isset($contentMain->lead_type)?$contentMain->lead_type:null) }}" >
                    <input type="hidden" name ="utm_term" value="{{ (isset($_GET['utm_term']))?$_GET['utm_term']:'' }}" >  
                    <input type="hidden" name ="utm_device" value="{{ (isset($_GET['utm_device']))?$_GET['utm_device']:'' }}" >  
                    <input type="hidden" name ="utm_adgroup" value="{{(isset($_GET['utm_adgroup']))?$_GET['utm_adgroup']:''}}" >  
                    <input type="hidden" name ="utm_content" value="{{(isset($_GET['utm_content']))?$_GET['utm_content']:''}}" > 
                    <input type="hidden" name ="utm_creative" value="{{(isset($_GET['utm_creative']))?$_GET['utm_creative']:''}}" > 
                    <input type="hidden" name ="ref_code" value="{{ (isset($_GET['ref']))?$_GET['ref']:'' }}" >  
                    <input type="hidden" name ="utm_url" value="{{ url()->current() }}" >
                </form>
            </div>
        </div>
        <div class="col-md-5">
            <div class="modelSideBanner">
                <div class="sec-title sec-title--center wow fadeInUp mb-3 mt-5" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <h3 class="sec-title__title"><span>Placed </span> <span class="sec-title__title__shape">Students</span><span class="sec-title__title__text"> Story</span></h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row justified-content-center">
                    @foreach(getPlacements(1) as $placement)
                        <div class="col-10"> 
                            <div class="placed-student-container my-2">
                                <div class="placed-student-content text-white margin-20px-right">
                                    <h6 class="margin-10px-bottom"> <strong>{{$placement->name }}</strong> </h6>
                                    <p> Designation: <strong>{{ $placement->dasignation}}</strong></p>
                                    <p> Placed At: <strong>{{ $placement->placed_at}}</strong></p>
                                    <p> Joining Salary : <strong>{{ $placement->joining_salary}}</strong></p>
                                </div>
                                <div class="student-image">                     
                                    <img src="{{ getSizedImage($placement->featured_image) }}" alt="{{$placement->name }}" data-no-retina="">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
