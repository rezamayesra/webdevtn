@extends('general.master')
@section('title')
    Ayo Makaryo
@endsection
@section('content')
    <div class="headAyoMakaryo">
        <div class="container ham">
            <form>
                <div class="row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Perusahaan">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Bidang Profesi">
                  </div>
                  <div class="col">
                    <select id="inputState" class="form-control" >
                        <option disable selected>Jenis Pekerjaan</option>
                        @foreach ($jobs as $job)
                            <option value="{{ $job->id }}">{{ $job->name | TimbangNganggur }}</option>
                        @endforeach
                        <?php
                        // $Job = array('FrontEnd Engineer','BackEnd Engineer');
                        // foreach ($Job as $val){
                        //     echo "<option value='$val'>$val</option>"; 
                        // }
                        ?>
                        
                    </select>
                  </div>
                  <div class="col search-box">
                    <input class="form-control search-text" type="search" placeholder="Kabupaten/Kota">
                </div>
               <button class="submit-btn"> <i class="fas fa-search"></i> </button>
                </div>
              </form>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- Area Kiri -->
            <div class="col-md-9">
                <h2 id="loker">Lowongan Pekerjaan</h2>
                <div class="lowongan-kerja">
                    <div class="row">
                        @foreach ($jobs as $job)
                            <div class="card mx-2" style="width: 16rem;">
                                <img src="{{ asset('img/Logo.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $job->companies->name }}</h5>
                                    <p class="card-text"><i class="fas fa-map-marker-alt"></i>&nbsp;{{ $job->companies->regions->name }}</p>
                                    <p class="card-text"><i class="fas fa-user"></i>&nbsp;{{ $job->name | TimbangNganggur }}</p>
                                    <p class="card-text"><i class="fas fa-coins"></i>&nbsp;{{ $job->salary }}</p>
                                    <p class="card-text"><i class="fas fa-clock"></i>
                                        @if ($job->type == 'full_time')
                                            &nbsp;Full Time    
                                        @endif
                                        @if ($job->type == 'part_time')
                                            &nbsp;Part Time    
                                        @endif
                                        @if ($job->type == 'internship')
                                            &nbsp;Internship    
                                        @endif
                                        @if ($job->type == 'apprentice')
                                            &nbsp;Apprentice    
                                        @endif
                                    </p>
                                    <a href="{{ route('ayoMakaryo.show', ['id' => $job->id]) }}" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        @endforeach
                    </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>

                </div>
            </div>

            <div class="vl md-1"></div>

            <!-- Area Kanan -->
            <div class="col-md-2">
                <div class="tersimpan">
                    <h2 id="tersimpan"><i class="fas fa-bookmark"></i> Tersimpan </h2>
                    <div class="Tersimpan">
                        <div class="row">
                            {{-- <div class="col">
                                <div class="card" style="width: 17rem;">
                                    <img src="{{ asset('img/Logo.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <p class="card-text"><i class="fas fa-user"></i> Profesi </p>
                                      <p class="card-text"><i class="fas fa-clock"></i> Jenis Pekerjaan </p>
                                      <a href="{{ route('detailLowongan') }}" class="btn btn-primary">Detail</a>
                                    </div>
                                  </div>
                            </div>        --}}
                        </div>
                    </div>
                </div>
        
                <div class="terakhir-dilihat">
                    <h2 id="terakhir-dilihat"><i class="fas fa-history"></i> Terakhir Dilihat</h2>
                    <div class="terakhir-lihat">
                        <div class="row">
                            {{-- <div class="col">
                                <div class="card" style="width: 17rem;">
                                    <img src="{{ asset('img/Logo.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <p class="card-text"><i class="fas fa-user"></i> Profesi </p>
                                      <p class="card-text"><i class="fas fa-clock"></i> Jenis Pekerjaan </p>
                                      <a href="{{ route('detailLowongan') }}" class="btn btn-primary">Detail</a>
                                    </div>
                                  </div>
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection