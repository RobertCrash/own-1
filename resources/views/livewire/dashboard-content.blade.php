<div class="container">
  <div class="flex flex-col w-full">
    <div class="flex flex-col w-full rounded shadow-lg p-4 bg-red-200"
      x-data="jobD()"
      x-init="mounted()" >
       
      <div style="" class="flex flex-col mt-6 w-fit">
        <p x-show.transition="ok" style="display: none;" class="bg-blue-500 text-white rounded inline p-2">updated!</p>
        <p x-show.transition="axiosResponse" x-text="axiosResponse" class="p-2"></p>
      </div>

      <div class="mt-4">
        <button x-model="dato1" x-bind:checked="dato1" @click="inviaValoriCheckBox(dato1)"  type="button" class="bg-blue-300 rounded p-2 m-2 hover:bg-blue-400">
            Get Data
        </button>
      </div>

      {{-- <p x-show.transition="axiosResponse" x-text="axiosResponse"></p> --}}

    </div>

    <div class="flex flex-col w-full rounded shadow-lg p-4 bg-red-200">
     
      <div style="" class="flex flex-col mt-6 w-fit">
        <button type="button" wire:click="startDiscover" class="bg-blue-300 rounded p-2 m-2 hover:bg-blue-400">Get Data</button>
      </div>

      <p>{{ $start_discover_msg }}</p>

    </div>

    <div class="flex flex-row w-full rounded overflow-hidden shadow-lg p-4 bg-[#edf9f5]">
        <div class="w-1/2">
            <p class="text-xl font-medium mb-2">Take your first reclaim</p>
            <span>Choose a company you no longer use and reclaim your data.<br><br>Take ownership one step at a time</span>
        </div>
        <div class="w-1/2">
            <img src="{{ asset('first-reclaim-banner.jpg') }}" class=""/>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="flex flex-col rounded overflow-hidden shadow-lg md:w-1/2 mx-auto p-4 w-full">
            <p class="text-center text-xl font-medium mb-2">Your data ownership progress</p>
            <img src="{{ asset('ownership_progess.png') }}" class="object-contain object-center h-48 w-48 mx-auto"/>
        </div>
        <div class="flex flex-col rounded overflow-hidden shadow-lg md:w-1/2 mx-auto p-4 w-full">
            <p class="text-center text-xl font-medium mb-2">Your Activity</p>
            <img src="{{ asset('ownership_activ.png') }}" class="object-contain object-center h-48 w-48 mx-auto"/>
        </div>
    </div>
  </div>
</div>

@push('scripts')
  <script>
    // 
    function jobD(){
      let __base_url = window.location.origin;

      return {
          dato1: '',
          axiosResponse: '',
          ok: false,

          inviaValoriCheckBox(val, servizio){
              axios.get(`${__base_url}/user/job-start-discover`, {
                headers:{
                  'Content-type': 'application/json',
                }
              })
              .then( (r)=>{
                      console.log(r);
                      console.log(this.dato1);
                      this.ok = true;
                      this.axiosResponse = r.data.msg;
                      setTimeout(() => {
                          this.ok = false;
                      }, 5000);

                  }).catch( (e)=>{
                      console.log(e);
                  })
          },
          mounted(){
              console.log('mounted');
          }
      }
    }
  </script>
@endpush