<div class="col-12 col-md-10 col-lg-8 col-xl-5 col-xxl-4">
    <div class="row status_container gy-4">
        <div class="col-sm-12 ps-xl-0">
            @if($status->status  === 'Complete')
                @foreach($scores->scores as $key => $value)
                    <div class="status_dash">
                        <div class="d-flex align-items-center justify-content-center w-100">
                            <h4 class="p-0 text-center">{{$key}}</h4>
                        </div>
                        <div class="slider-container">
                            <!-- Progress Bar -->
                            {{-- <div class="progress-bar">
                                 <div class="progress" id="progress"></div>
                                 <div class="thumb-value" id="thumbValue">0</div>
                                 <ul class="progress-circles">
                                     <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
                                 </ul>
                             </div>--}}

                            <!-- Labels -->
                            <div class="labels">
                                <span>Impulsive</span>
                                <div class="range-slider">
                                    <div class="tooltip">{{$value}} <h3>{{$value}}</h3></div>
                                    <input class="range" name="radius" value="{{ $value ?? 50 }}" disabled type="range" step="1" min="0" max="100">
                                </div>
                                <span>Goal-Oriented</span>
                            </div>
                        </div>
                    </div>

                @endforeach
            @else
                <div class="status_dash">
                    <div class="d-flex align-items-center justify-content-center w-100">
                        <h4 class="p-0 text-center">Test Is {{ $status?->status ?? "Not Attended"}}</h4>
                    </div>
                    @endif

                </div>
                {{--  @if( $status && $status?->status == 'Complete')
                  <div class="show-more"> <button type="button">Show More</button></div>
                  @endif--}}
                {{--  <div class="col-sm-6 ps-xl-0">
                       <div class="status_dash">
                           <div class="d-flex align-items-center justify-content-between w-100">
                               <h4 class="p-0">Extrovert</h4>
                               <i class="fa-solid fa-ellipsis"></i>
                           </div>
                           <div class="progress">
                               <div class="barOverflow">
                                   <div class="bar"></div>
                               </div>
                               <span class="bar-text">30%</span>
                           </div>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                           <h3>2,241</h3>
                       </div>
                   </div>  --}}

        </div>
    </div>

</div>
