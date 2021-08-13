<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>form | kehadiran</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{ asset('assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> --}}
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <meta property="og:site_name" content="Event Tilawatipusat">
        <meta property="og:title" content="Mengetuk Pintu Langit"/>
        <meta property="og:description" content="Do'a Bersama Terbebas Dari Covid-1" />
        <meta property="og:image" itemprop="image" content="{{ asset('images/tmb.jpeg') }}">
        <meta property="og:type" content="website" />
        <meta property="og:updated_time" content="1440432930" />
        
        <style>
            .tombol {
            background-color: #615638; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            }

            .tombol1 {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            }

            .tombol2:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
            }
        </style>
	</head>

	<body>

		{{-- <div class="wrapper" style="background-image: url({{ asset('assets/images/bg-registration-form-1.jpg') }});"> --}}
        <div class="wrapper" style="background-color: rgb(78, 126, 78)">
			<div class="inner">
				<div class="image-holder">
					<img src="{{ asset('images/11.jpg') }}" alt="">
				</div>
				<form id="formsubmit" method="post" style="padding:3%">@csrf
					<h3>Daftar Kehadiran </h3>
                    <div class="form-wrapper">
                        <input type="hidden" name="acara_id" id="acara_id" value="{{ $acara->id }}">
						<input type="text" style="padding: 1%" placeholder="Nama Lengkap" name="name" class="form-control" style="text-transform:capitalize" required>
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="card" style="text-transform: uppercase">
                        <div class="card-body form-wrapper">
                            <select name="provinsi_id" id="provinsi_id" class="form-control" style="padding: 1%" required>
                                <option value="" disabled selected>Provinsi</option>
                                @foreach ($dt_prop as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                            <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                        </div>
                        <div class="card-body form-wrapper">
                            <select name="kabupaten_id" id="kabupaten_id" class="form-control" style="padding: 1%" required>
                                <option value="" disabled selected>Kabupaten / Kota</option>
                            </select>
                            <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                        </div>
                        <div class="card-body form-wrapper">
                            <select name="kecamatan_id" id="kecamatan_id" class="form-control" style="padding: 1%" required>
                                <option value="" disabled selected>Kecamatan</option>
                            </select>
                            <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                        </div>
                        <div class="card-body form-wrapper form-group">
                            <label for="">donatur</label>
                            <input type="radio" style="text-align: left" name="donatur" value="1"  required>Ya
                            <input type="radio" name="donatur" value="0"  required>Tidak
                        </div>
                        <div class="form-group" style="margin-top: 10px">
                            
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 10px">
                        <i class="zmdi zmdi-phone" style="margin-right: 10px"> </i>
						<input type="number" name="telp" id="phone" placeholder=" Phone" class="form-control" required>
                        <i class="zmdi zmdi-email" style="margin-right: 10px"> </i>
						<input type="email" name="email" placeholder=" Email" class="form-control" required>
					</div>

					{{-- <div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Confirm Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div> --}}
                    <center>
                        <small>pastikan data yang anda isikan</small>
                        <hr>
                    </center>
					{{-- <button>Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button> --}}
                    <center>
                        <input type="submit" value="Hadir!" id="next" style="border-radius: 6px; max-width: 100%; font-size: 14px" class="tombol tombol2 ">
                    </center>
				</form>
			</div>
		</div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
		<script type="text/javascript">
        $(document).ready(function() {
            $('select[name="provinsi_id"]').on('change', function() {
                //mencari kota/kab dari provinsi 3 tingkat
                var provinsi_id = $(this).val();
                console.log(provinsi_id);
                if(provinsi_id) {
                    
                    $.ajax({
                        url: '/fetch/' + provinsi_id,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {                     
                            $('select[name="kabupaten_id"]').empty();
                            $.each(data, function(key, value) {
                            $('select[name="kabupaten_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });
                            console.log(data);
                            var a = $( "#kabupaten_id option:selected" ).val();
                            console.log("kabupaten"+a);
                            if(a) {
                            $.ajax({
                                    url: '/fetch2/' + a,
                                    type: "GET",
                                    dataType: "json",
                                    success:function(data) {                      
                                        $('select[name="kecamatan_id"]').empty();
                                        $.each(data, function(key, value) {
                                        $('select[name="kecamatan_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                                        });
                                        console.log(data);
                                        var x = $( "#kecamatan_id option:selected" ).val();
                                        console.log("kecamatan"+x);
                                       
                                    }
                                });
                            }else{
                                $('select[name="kecamatan_id"]').empty().disabled();
                            }
                        }
                    });
                }else{
                    $('select[name="kabupaten_id"]').empty().disabled();
                }
            });

            $('select[name="kabupaten_id"]').on('change', function() {
                //mencari kecamatan dari kota/kab 2 tingkat
                var kabupaten_id = $(this).val();
                console.log(kabupaten_id);
                if(kabupaten_id) {
                    
                    $.ajax({
                        url: '/fetch2/' + kabupaten_id,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {                      
                            $('select[name="kecamatan_id"]').empty();
                            $.each(data, function(key, value) {
                            $('select[name="kecamatan_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });
                            console.log(data);
                            var x = $( "#kecamatan_id option:selected" ).val();
                            console.log("kecamatan"+x);
                            
                        }
                    });
                }else{
                    $('select[name="kecamatan_id"]').empty().disabled();
                }
            });

            $(function() {
				$('#phone').keyup(function() {
					phonetxtln = $(this).val().length;
					formatphone = $(this).val().substr(0,2);
					if (formatphone !== 08) {
						if (phonetxtln < 12 || phonetxtln > 13) {
							$('#next').val(''+phonetxtln+' Digit dari 12 / 13 Digit & dengan awalan 08' );
							$('#next').attr('disabled','disabled');
						}else if (phonetxtln == 12 || phonetxtln == 13){
							$('#next').val('Phone Number wajib dengan 08' );
							$('#next').attr('disabled','disabled');
						}
					}if(formatphone == 08) {
						if (phonetxtln < 12 || phonetxtln > 13) {
							$('#next').val('Phone Number '+phonetxtln+' dari 12 / 13 Digit' );
							$('#next').attr('disabled','disabled');
						}else if (phonetxtln == 12 || phonetxtln == 13){
							$('#next').val('Register!');
							$('#next').attr('disabled',false);
						}
					}
				});
        	});
        });
        $('#formsubmit').submit(function(e) {
            e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                type:'POST',
                url: "{{ route('submit.registrasi')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $('#next').attr('disabled','disabled');
                    $('#next').val('Proses Menyimpan Data');
                    
                },
                success: function(data){
                    if(data.success)
                    {
                        $("#formsubmit")[0].reset();
                        $('#next').val('Submit!');
                        $('#next').attr('disabled',false);
                        swal({ title: "Success!",
                            text: "Pendaftaran Sukses!",
                            type: "success"})
                            // .then(okay => {
                            //     if (okay) {
                            //         window.location.href = "/tes";
                            //     }
                            // });
                    }
                    else{
                        $('#next').val('Buat Baru');
                        $('#next').attr('disabled',false);
                        swal({ title: "Error!",
                            text: "Peserta Telah Terdaftar!",
                            type: "error"})
                    }
                },
                error: function(data)
                {
                    console.log(data);
                    }
                });
        })
        </script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>