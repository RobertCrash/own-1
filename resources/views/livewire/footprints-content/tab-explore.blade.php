<div class="" x-data="{ 'showModal': false, 'companyName': '', toggleModal(name) { this.showModal ? document.body.classList.remove('overflow-hidden') : document.body.classList.add('overflow-hidden'); this.showModal = ! this.showModal; this.companyName = name; } }" :class="{ '': showModal }" x-cloak>
  {{--
    document.body.style.overflow = 'hidden'
    document.body.classList.contains("overflow-hidden")

  --}}
  
  <p class="mt-4 p-2">Play 1</p>
  <div id="testit0" x-data="footprints_all_swiper_xdata()"
    x-init="s_init(); await s_footprints_fetch(s_footprints_all, 'https://own.test.com/user/footprints?sort[order]=desc'); s_on_reachEnd()"
    class="px-4"
    x-cloak wire:ignore
  >

  <div class="flex flex-row m-4">
  <div class="flex items-center ml-auto">
    <button @click="s_footprints_all['swiper'].slidePrev()" 
            class="bg-gray-200 -ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
      <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="flex items-center">
    <button @click="s_footprints_all['swiper'].slideNext()" 
            class="bg-gray-200 -mr-2 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
      <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  </div>

  <div class="container-footprints-all swiper-container overflow-hidden py-4 px-2 rounded bg-gray-100" x-ref="container-footprints-all">
    <div class="swiper-wrapper">
      
      <!-- Slides -->

    </div>
  </div>
  {{-- 
    <div class="mt-4">
      <button @click="s_data_next_url ? s_fetch(s_data_next_url) : console.log('last')"  type="button" class="bg-blue-300 rounded p-2 m-2 hover:bg-blue-400">
          load more
      </button>
    </div>
  --}}
  </div>

  <div id="testit1" x-data="footprints_keep_swiper_xdata()"
    x-init="s_init(); await s_footprints_fetch(s_footprints_keep, 'https://own.test.com/user/footprints?sort[order]=desc&wanted=1'); s_on_reachEnd()"
    class="px-4"
    x-cloak wire:ignore
  >

  

  <div class="flex flex-row m-4 p-2 h-16">
  <div class="flex flex-row items-center ml-auto p-2 shadow-md rounded-3xl">
    <button @click="s_footprints_keep['swiper'].slidePrev()" 
      class="flex justify-center items-center focus:outline-none mx-2"
    >
      <svg xmlns="http://www.w3.org/2000/svg" class="h-auto w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
      </svg>
    </button>
    <div class="flex bg-gray-200 w-0.5 h-full mx-2"></div>
    <button @click="s_footprints_keep['swiper'].slideNext()" 
      class="flex justify-center items-center focus:outline-none mx-2"
    >
      <svg xmlns="http://www.w3.org/2000/svg" class="h-auto w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
      </svg>
    </button>
  </div>
  </div>

  <div class="container-footprints-keep swiper-container overflow-hidden py-4 px-2 rounded bg-gray-100" x-ref="container-footprints-keep">
    <div class="swiper-wrapper">
      
      <!-- Slides -->

    </div>
  </div>
  {{-- 
    <div class="mt-4">
      <button @click="s_data_next_url ? s_fetch(s_data_next_url) : console.log('last')"  type="button" class="bg-blue-300 rounded p-2 m-2 hover:bg-blue-400">
          load more
      </button>
    </div>
  --}}
  </div>

  <!--Overlay-->
  <div class="" style="background-color: rgba(0,0,0,0.5)" x-show="showModal" :class="{ 'fixed overscroll-none overflow-hidden z-50 top-0 left-0 w-full h-screen flex items-center justify-center': showModal }">
    <!--Dialog-->
    <div class="block bg-white w-10/12 md:max-w-md mx-auto rounded shadow-lg py-4 text-left px-6" x-show="showModal" @click.away="toggleModal()" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">

    <!--Title-->
    <div class="flex justify-between items-center pb-3">
      <p class="text-2xl font-bold">Simple Modal!</p>
      <div class="cursor-pointer z-50" @click="toggleModal()">
        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
      </div>
    </div>

    <!-- content -->
    <p>Modal content can go here</p>
    <p x-text="companyName"></p>

    <!--Footer-->
    <div class="flex justify-end pt-2">
      <button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2" @click="alert('Additional Action');">Action</button>
      <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400" @click="toggleModal()">Close</button>
    </div>


    </div><!--/Dialog -->
  </div><!-- /Overlay -->

  <p class="mt-4 p-2">Play 2</p>
  <div class="grid place-items-center gap-2 p-4 grid-cols-2 lg:grid-cols-3">
    @foreach ($footprints as $footprint)
      <div class="flex flex-col items-center text-center p-6 bg-white rounded border-gray-200 w-full">
        <img class="w-20 h-20 fill-current text-gray-500" src="http://{{ $footprint['company']['logo_path'] }}" alt="image" />
          {{ $footprint['company']['name'] }}
      </div>
    @endforeach
  </div>

  @if ($hasMorePages)
        <div class="flex items-center justify-center mt-4">
            <button
                class="px-4 py-3 text-lg font-semibold text-white rounded-xl bg-green-500 hover:bg-green-400"
                wire:click="loadFootprints"
            >
                Load More
            </button>
        </div>
  @endif

  
  <p class="mt-4 p-2">Play 3</p>
  <div class="flex flex-col w-full rounded shadow-lg p-4 bg-red-200"
  x-data="footprintD()"
  x-init="mounted()">
   
  <div style="" class="flex flex-col mt-6 w-fit">
    <p x-show.transition="ok" style="display: none;" class="bg-blue-500 text-white rounded inline p-2">updated!</p>
    <template x-show.transition="axiosResponse" x-for="item in axiosResponse" class="p-2">
      {{-- <p x-text="item.company.name"></p> --}}
      <p x-text="item.company.name"></p>
    </template>
  </div>
  
  <div class="mt-4">
    <button x-model="dato1" x-bind:checked="dato1" @click="inviaValoriCheckBox(dato1)"  type="button" class="bg-blue-300 rounded p-2 m-2 hover:bg-blue-400">
        Get Data
    </button>
  </div>
  
  {{-- <p x-show.transition="axiosResponse" x-text="axiosResponse"></p> --}}
  
  <div style="" class="flex flex-col mt-6 w-fit">
    <template x-show.transition="fetchRes" x-for="item in fetchRes" class="p-2">
      {{-- <p x-text="item.company.name"></p> --}}
      <p x-text="item.company.name"></p>
    </template>
  </div>

  <div class="mt-4">
    <button @click="fetchD('https://own.test.com/user/footprints?page=2')"  type="button" class="bg-blue-300 rounded p-2 m-2 hover:bg-blue-400">
        Get Data
    </button>
  </div>

  </div>

</div>


@push('styles')
    <style>
      * {
        box-sizing: border-box;
      }

      .duration-300 {
			transition-duration: 300ms;
		}

		.ease-in {
			transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
		}

		.ease-out {
			transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
		}

		.scale-90 {
			transform: scale(.9);
		}

		.scale-100 {
			transform: scale(1);
		}


    </style>    
@endpush

@push('scripts')
    <script>
    //var __base_url = window.location.origin; 

    function footprintD(){
      let __base_url = window.location.origin;

      return {
          dato1: '',
          axiosResponse: [],
          ok: false,

          fetchRes: [],
          
          inviaValoriCheckBox(val, servizio){
              axios.get(`${__base_url}/user/footprints`, {
                headers:{
                  'Content-type': 'application/json',
                }
              })
              .then( (response)=>{ 
                console.log(response);      
                console.log(response.data);
                console.log(response.data.data);
                //console.log(JSON.parse(response.data));
                      this.ok = true;
                      this.axiosResponse = response.data.data;
                      //console.log(axiosResponse);
                      setTimeout(() => {
                          this.ok = false;
                      }, 5000);

                  }).catch( (e)=>{
                      console.log(e);
                  })
          },
          mounted(){
              console.log('mounted');
          },
          fetchD(v_url){
              axios.get(v_url, {
                headers:{
                  'Content-type': 'application/json',
                }
              })
              .then( (response)=>{ 
                console.log(response);    
                this.fetchRes = response.data.data;
              }).catch( (e)=>{
                console.log(e);
              })
          },
      }
    }


    async function s_footprints_fetch(t_swiper_page, t_url = 'https://own.test.com/user/footprints') {
      axios.get(t_url , {
        headers:{
          'Content-type': 'application/json',
        }
      }).then( (response)=>{ 
        console.log('s_fetch');
        console.log(response);
        response.data.data.forEach( item => {
          t_swiper_page['swiper'].appendSlide(
            '<div @click="toggleModal()" class="swiper-slide cursor-pointer flex flex-col items-center text-center m-0 p-6 bg-white hover:shadow-lg rounded border-white"><img class="w-20 h-20 fill-current text-gray-500" src="http://' + item['company']['logo_path'] + '" alt="image"/>' + item['company']['name'] + '</div>');
        });
        t_swiper_page['next_url'] = response.data.next_page_url;
      }).catch( (e)=>{
        console.log(e);
      });
    }

    var s_footprints_all = {
      'swiper': null,
      'next_url': '',

    };

    function footprints_all_swiper_xdata(){
      //let data_next_url = '';

      return {
        //s_swiper: null,
        //s_data: [],
        //s_data_next_url: '',
        s_init() {
          //this.s_data = [];
          //this.s_data_next_url = '';

          s_footprints_all['swiper'] = new Swiper('.container-footprints-all', {
            loop: false,
            slidesPerView: 3,
            mousewheelControl: true,
            spaceBetween: 10,
            centeredSlides: false,
            on: {
              beforeInit: function () {
                console.log('beforeInit');
              },
              init: function () {
                console.log('Init');
              },
              afterInit: function () {
                console.log('afterInit');
              },
              click: function () {
                console.log('click');
              },
            },
          });
        },
        s_on_reachEnd() {
          s_footprints_all['swiper'].on('reachEnd', function () {
                console.log('reachEnd');
                console.log(s_footprints_all['next_url']);

                (s_footprints_all['next_url'] && s_footprints_all['next_url'] != '' ) ? s_footprints_fetch(s_footprints_all, s_footprints_all['next_url']) : console.log('no next');
          });
        },
      }
    }

    var s_footprints_keep = {
      'swiper': null,
      'next_url': '',

    };

    function footprints_keep_swiper_xdata(){
      //let data_next_url = '';

      return {
        //s_swiper: null,
        //s_data: [],
        //s_data_next_url: '',
        s_init() {
          //this.s_data = [];
          //this.s_data_next_url = '';

          s_footprints_keep['swiper'] = new Swiper('.container-footprints-keep', {
            loop: false,
            slidesPerView: 3,
            mousewheelControl: true,
            spaceBetween: 10,
            centeredSlides: false,
            on: {
              beforeInit: function () {
                console.log('beforeInit');
              },
              init: function () {
                console.log('Init');
              },
              afterInit: function () {
                console.log('afterInit');
              },
            },
          });
        },
        s_on_reachEnd() {
          s_footprints_keep['swiper'].on('reachEnd', function () {
                console.log('reachEnd');
                console.log(s_footprints_keep['next_url']);

                (s_footprints_keep['next_url'] && s_footprints_keep['next_url'] != '' ) ? s_footprints_fetch(s_footprints_keep, s_footprints_keep['next_url']) : console.log('no next');
          });
        },
      }
    }

    </script>
@endpush
