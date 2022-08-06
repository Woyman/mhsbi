@extends('layout.wedding.main-layout')

@section('content')

<cover id="cover">
    <div class="overlay-opening">        
    </div>
    <div class="overlay-content">
        <div class="guest_content">
            @if($to !== null)
            <div class="text-center mt-2 font-lora">
                Kepada Yth.
            </div>
            <div class="text-center mt-2">
                <h1 class="font-jimmy-script" style="letter-spacing: 2px">
                    {{ $to }}
                </h1>
            </div>
            <div class="text-center mt-2 font-lora">
                di tempat
            </div>
            @else
            <div class="text-center mt-2 font-lora">
                Undagan Pernikahan
            </div>
            <div class="text-center mt-2">
                <h1 class="font-jimmy-script" style="letter-spacing: 2px">
                    Aini & Hasbi
                </h1>
            </div>
            @endif
            <div class="text-center mt-2 font-lora">
                <button class="btn btn-primary" id="open-ivitation"><i class="bi bi-map-fill"></i> Buka Undangan</button>
            </div>
        </div>
    </div>
</cover>

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

    <section style="padding: 20px 0 !important">
        <div class="container" data-aos="fade-up">            
            <div class="d-flex flex-column justify-content-center">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('assets/img/ornamen.png') }}" class="img-ornamen"></img>
                </div>
                <div class="d-flex justify-content-center">
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
                                        Akad dan Walimah
                                    </h1>                                        
                                </div>

                                <div class="d-flex justify-content-center">                                         
                                    <div class="text-center font-lora">                                           
                                        <p>Sabtu, 20 Agustus 2022</p>
                                        <p>Akad: 06.00 WIB</p>
                                        <p>Resepsi: 09.00 - 12.00 WIB</p>
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
                                        <p>10.00 - 14.00 WIB</p>
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
                        <div class="d-flex justify-content-center"> 
                            <p class="font-lora" style="font-size: 14px"> 
                                <b>
                                    *Tanpa mengurangi rasa hormat kami, mohon maaf kami tidak menerima sumbangan untuk acara ini*
                                </b>
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
                        <form id="form-ucapan">
                            @csrf
                            <div class="mb-3">                                    
                                <input type="text" name="nama" class="form-control" id="name" placeholder="Masukkan nama" required>
                            </div>
                            <div class="mb-3">                            
                                <textarea row="5" type="text" name="ucapan" class="form-control" id="ucapan" placeholder="Ucapan kepada mempelai" required></textarea>
                            </div>
                            <div class="mb-3">                            
                                <button class="btn btn-primary" id="submit-ucapan" type="submit">Kirimkan Ucapan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-6 col-sm-12 mx-auto" style="max-height: 450px; overflow:scroll" id="ucapan-list">
                                                
                    </div>
                </div>
            </div>
        </div>
    </section>


<a href="javascript:void(0)" class="music-player d-flex align-items-center justify-content-center" id="music-toogle">
    <i class="bi bi-play-fill" id="icon-music-toogle">
    </i>

    <!-- <iframe src="{{ asset('assets/img/DAY6 - Man in a Movie Orchestra Cover Ver.mp3') }}" allow="autoplay" style="display:none" id="song"></iframe>  -->
    <audio id="song" loop="true" autoplay="true">
		<source src="{{ asset('assets/img/DAY6 - Man in a Movie Orchestra Cover Ver.mp3') }}" type="audio/mp3">
	</audio>
</a>
</main>


@endsection

@prepend('scripts')

@endprepend

@push('scripts')

@endpush

@section('js-content')

<script type="text/javascript" defer>

var song = document.getElementById("song");
var songIsPlay = false;

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

// window.onload = function() {
//   var context = new AudioContext();
// }

// var song = document.getElementById("myAudio");
// song.play()

$( document ).ready(function() {

    reloadDataUcapan()

    $('#form-ucapan').submit(function(event){
        event.preventDefault();

        var formData = $("#form-ucapan").serializeArray();
        const url = "<?= url('/my-wedding-invitation/ucapan/post');?>"
        $.post(url, formData, function(response, status){
            reloadDataUcapan()
        })
    })

    $('#open-ivitation').click(function(){
        $('#cover').remove()
        $('#icon-music-toogle').prop('class', 'bi bi-pause-fill')
        song.play()
        songIsPlay = true
    })

    $('#music-toogle').click(function(){
        
        songIsPlay = !songIsPlay
        if(songIsPlay === true) {
            $('#icon-music-toogle').prop('class', 'bi bi-play-fill')
            song.pause()
        } else {
            $('#icon-music-toogle').prop('class', 'bi bi-pause-fill')
            song.play()
        }
    })
    
});

function reloadDataUcapan() {
    var ucapanList = $('#ucapan-list');
    ucapanList.html('');

    const urlGetUcapan = "<?= url('/my-wedding-invitation/ucapan/get');?>"
    $.get(urlGetUcapan, function(response, status){
        var result = JSON.parse(response)
        if(result.length > 0){
            result.forEach(element => {
                var tmpRes = '<div class="alert alert-primary d-flex align-items-center p-2" role="alert"><div class="col-12"><div style="float: right">'+element.datetime+'</div><b><i class="bi bi-chat-dots-fill" style="margin-right: 5px"></i>'+element.nama+'</b><br>'+element.ucapan+'</div></div>'
                ucapanList.append(tmpRes)
            });
        } else {
            ucapanList.html('<div class="text-center">Jadilah yang pertama memberikan ucapan. :D</div>')            
        }        
    })    
    
   

}

</script>

@endsection