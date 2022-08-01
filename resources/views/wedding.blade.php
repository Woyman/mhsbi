@extends('layout.wedding.main-layout')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center" style="padding-left: 0px !important;">
    <video autoplay muted loop id="myVideo">
        <source src="{{ asset('assets/img/background-meta.webm') }}" type="video/webm">
    </video>
    <div class="container text-center" data-aos="zoom-in" >
        <p class="pb-3 font-cinzel">The Wedding</p>
        <h1 class="font-jimmy-script title-couple-name">Aini & Hasbi</h1>

        <div id="countdown" class="mt-5 pt-5">
            <p class="font-cinzel">Save the Date: <br> 20 Agustus 2022</p>
            <ul class="countdown-wrapper">
                <li><span id="timer-days"></span>days</li>
                <li><span id="timer-hours"></span>Hours</li>
                <li><span id="timer-minutes"></span>Minutes</li>
                <li><span id="timer-seconds"></span>Seconds</li>
            </ul>
        </div>
    </div>
</section><!-- End Hero -->

<main id="main" style="margin-left: 0px !important">
    
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">            

            <div class="row my-4">
                    <div class="col-12">
                        <div class="card p-3 shadow" style="border-radius: 1.5rem">
                            <div class="row my-2">
                                <div class="d-flex flex-column justify-content-center text-center">
                                    <div class="d-flex justify-content-center">
                                        <img src="<?php echo asset('assets/img/bismillah.png') ?>" style="height:150px; max-width: 260px"  alt="img-bismillah">
                                    </div>
                                    <div class="d-flex justify-content-center"> 
                                        <p class="font-lora"> 
                                            <b>Assalamu'alaikum Warahmatullaahi Wabarakaatuh</b>
                                        </p>                                        
                                    </div>
                                    <div class="d-flex justify-content-center"> 
                                        <p class="font-lora" align="center" style="max-width: 765px;">
                                            Maha Suci Allah yang telah menciptakan makhluk-Nya berpasang-pasangan. Ya Allah semoga ridho-Mu tercurah mengiringi pernikahan kami.
                                        </p>
                                    </div>                                                                    
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-md-6 col-sm-12">
                                    <div class="d-flex flex-column justify-content-center">
                                        <div class="d-flex justify-content-center">
                                            <div style="border-radius:50%; overflow:hidden; max-width: 165px">
                                                <img src="<?php echo asset('assets/img/pengantin-wanita.jpg') ?>" class="rounded" alt="gambar-pengantin-pria">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column text-center mt-3">
                                            <h1 class="font-jimmy-script">Isnaini Safiti Qodrianti</h1>
                                            <p class="font-lora">
                                                Putri dari </br>
                                                Bapak Aris Pujianto dan Ibu Irma christanti
                                            </p>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="col-md-6 col-sm-12">
                                <div class="d-flex flex-column justify-content-center">
                                    <div class="d-flex justify-content-center">
                                        <div style="border-radius:50%; overflow:hidden; max-width: 165px">
                                            <img src="<?php echo asset('assets/img/pengantin-pria.jpg') ?>" class="rounded" alt="gambar-pengantin-pria">
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column text-center mt-3">
                                        <h1 class="font-jimmy-script">Muhammad Hasbi Habibi</h1>
                                        <p class="font-lora">
                                                Putra dari </br>
                                                Bapak Khabib Bastari dan Ibu Siti Samlina
                                            </p>
                                    </div>
                                        
                                </div>
                                        
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </section>

    <section>
        <div class="container" data-aos="fade-up">            
            <div class="d-flex justify-content-center">
                <div class="d-flex">
                    <p align="center" class="font-lora" style="max-width: 765px"><b>
                        "Dan segala sesuatu di alam semesta telah Kami ciptakan secara berpasang-pasangan untuk saling melengkapi. Yang demikian ini agar kamu selalu mengingat kekuasaan dan kebesaran Allah"
                        <br>
                        <br>
                        Qs. Az-Zariyat : 49
                    </b>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" data-aos="fade-up">            
            <div class="card p-3 mb-3 shadow" style="border-radius: 1.5rem">
                <div  class="row my-2">
                    <div class="col-lg-6 col-sm-12">
                        <div class="card p-3 mb-3 rounded-3">
                            <div class="d-flex justify-content-center flex-column">
                                <div class="d-flex justify-content-center"> 
                                    <h1 class="font-jimmy-script"> 
                                        Akad dan Resepsi
                                    </h1>                                        
                                </div>

                                <div class="d-flex justify-content-center">                                         
                                    <div class="text-center font-lora">                                           
                                        <p>Sabtu, 20 Agustus 2022</p>
                                        <p>09.00 - 12.00 WIB</p>
                                        <p>
                                            Lokasi:
                                            <br>
                                            Sidoharjo 04/05, Tamanagung, Muntilan, Kab. Magelang, Jawa Tengah
                                        </p>
                                        <p>
                                            <a href="https://goo.gl/maps/dM9FLgu3s6KesyRk7" class="btn btn-primary" target="_blank">
                                                <i class="bi bi-cursor-fill"></i>
                                                Lihat lokasi
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="card p-3 rounded-3">
                            <div class="d-flex justify-content-center flex-column">
                                    <div class="d-flex justify-content-center"> 
                                        <h1 class="font-jimmy-script"> 
                                            Ngunduh Mantu
                                        </h1>                                        
                                    </div>

                                    <div class="d-flex justify-content-center">                                         
                                    <div class="text-center font-lora">                                           
                                        <p>Senin, 22 Agustus 2022</p>
                                        <p>09.00 - 12.00 WIB</p>
                                        <p>
                                            Lokasi:
                                            <br>
                                            Bugisan 03/06 Lodoyong, Ambarawa, Kab. Semarang, Jawa Tengah
                                        </p>
                                        <p>
                                            <a href="https://goo.gl/maps/1BbTBMYxhmGCaf7h9" class="btn btn-primary" target="_blank">
                                                <i class="bi bi-cursor-fill"></i>
                                                Lihat lokasi
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="d-flex flex-column justify-content-center text-center">
                        <div class="d-flex justify-content-center"> 
                            <p class="font-lora" style="max-width: 765px"> 
                                Merupakan kehormatan serta kebahagiaan bagi kami sekeluarga apabila Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan doa restu kepada kedua mempelai.
                            </p>                                        
                        </div>
                        <div class="d-flex justify-content-center"> 
                            <p class="font-lora"> 
                                <b>Jazakumullah Khairan Katsiran<br>
                                Wassalamuallaikum Warrahmatullahi Wabarakatuh</b>
                            </p>                                        
                        </div>
                        <div class="d-flex justify-content-center"> 
                            <p class="font-lora"> 
                                Kami yang berbahagia
                            </p>                                                                               
                        </div>
                        <div class="d-flex justify-content-center"> 
                            <h1 class="font-jimmy-script"> 
                                Aini & Hasbi
                            </h1>                                        
                        </div>
                        <div class="d-flex justify-content-center"> 
                            <p class="font-lora"> 
                                Beserta kedua keluarga besar mempelai
                            </p>                                                                               
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container" data-aos="fade-up">            
            <div class="card p-3 mb-3 shadow" style="border-radius: 1.5rem">
                <div class="row my-2">
                    <div class="d-flex flex-column justify-content-center text-center">                       
                        <div class="d-flex justify-content-center"> 
                            <h1 class="font-jimmy-script"> 
                                Kirimkan ucapan kepada kami:
                            </h1>                                 
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-6 col-sm-12 mx-auto">
                        <form id="form-ucapan" action="<?php echo url('/my-wedding-invitation/ucapan/post') ?>" method="POST">
                            @csrf
                            <div class="mb-3">                                    
                                <input type="text" name="nama" class="form-control" id="name" placeholder="Masukkan nama" required>
                            </div>
                            <div class="mb-3">                            
                                <input type="text" name="ucapan" class="form-control" id="ucapan" placeholder="Ucapan kepada mempelai" required>
                            </div>
                            <div class="mb-3">                            
                                <button class="btn btn-primary" id="submit-ucapan" type="submit">Kirimkan Ucapan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-6 col-sm-12 mx-auto" style="max-height: 450px; overflow:scroll">
                        <div class="alert alert-primary d-flex align-items-center p-2" role="alert">                            
                            <div>
                                <div class="float-end">
                                    Sabtu, 14/08/2022
                                </div>
                                <b><i class="bi bi-chat-dots-fill"></i> Name:</b><br>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore atque blanditiis et sit! Odio, doloribus? Amet sunt, iste explicabo animi quas hic quod accusamus. Quisquam ipsam odit amet cum ea!
                            </div>                            
                        </div>
                        <div class="alert alert-primary d-flex align-items-center p-2" role="alert">                            
                            <div>
                                <div class="float-end">
                                    Sabtu, 14/08/2022
                                </div>
                                <b><i class="bi bi-chat-dots-fill"></i> Name:</b><br>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore atque blanditiis et sit! Odio, doloribus? Amet sunt, iste explicabo animi quas hic quod accusamus. Quisquam ipsam odit amet cum ea!
                            </div>                            
                        </div>
                        <div class="alert alert-primary d-flex align-items-center p-2" role="alert">                            
                            <div>
                                <div class="float-end">
                                    Sabtu, 14/08/2022
                                </div>
                                <b><i class="bi bi-chat-dots-fill"></i> Name:</b><br>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore atque blanditiis et sit! Odio, doloribus? Amet sunt, iste explicabo animi quas hic quod accusamus. Quisquam ipsam odit amet cum ea!
                            </div>                            
                        </div>
                        <div class="alert alert-primary d-flex align-items-center p-2" role="alert">                            
                            <div>
                                <div class="float-end">
                                    Sabtu, 14/08/2022
                                </div>
                                <b><i class="bi bi-chat-dots-fill"></i> Name:</b><br>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore atque blanditiis et sit! Odio, doloribus? Amet sunt, iste explicabo animi quas hic quod accusamus. Quisquam ipsam odit amet cum ea!
                            </div>                            
                        </div>
                        <div class="alert alert-primary d-flex align-items-center p-2" role="alert">                            
                            <div>
                                <div class="float-end">
                                    Sabtu, 14/08/2022
                                </div>
                                <b><i class="bi bi-chat-dots-fill"></i> Name:</b><br>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore atque blanditiis et sit! Odio, doloribus? Amet sunt, iste explicabo animi quas hic quod accusamus. Quisquam ipsam odit amet cum ea!
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</main>

@endsection

@prepend('scripts')

@endprepend

@push('scripts')
<script type="text/javascript">

$( document ).ready(function() {
    $('#submit-ucapan').click(function(event){
        event.preventDefault();

        var formData = $("#form-ucapan").serializeArray();
        console.log(formData)
    })
});

</script>
@endpush

@section('js-content')

<script>

(function () {
    const   second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;  
    let dd = '20',
        mm = '08',
        yyyy = '2022',
        time = '09:00',

  theDay = mm + "/" + dd + "/" + yyyy + ' ' + time;
  
  const countDown = new Date(theDay).getTime(),
      x = setInterval(function() {    

        const now = new Date().getTime(),
              distance = countDown - now;

          document.getElementById("timer-days").innerText = Math.floor(distance / (day)),
          document.getElementById("timer-hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("timer-minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("timer-seconds").innerText = Math.floor((distance % (minute)) / second);

      }, 0)
  }());

</script>

@endsection