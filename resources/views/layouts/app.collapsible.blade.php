@extends('layouts.base')

@section('body')
  <div class="flex md:flex-row-reverse flex-wrap bg-white">
    {{-- @include('layouts.navigation') --}}
    {{-- @livewire('layouts.navigation') --}}

    <div class="w-full h-screen bg-white md:pl-48">

      @isset($header)
        <!-- Page Heading -->
        <header class="header fixed w-full">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
      @endisset

      <!--Main Content-->
      <main class="main container w-full pt-16 px-6 mx-auto">
        @yield('content')

        @isset($slot)
          {{ $slot }}
        @endisset   
      </main>
    </div>

    <!--Sidebar-->
    <div class="nav w-full h-max md:w-48 px-2 text-center fixed bottom-0 md:pt-8 md:top-0 md:left-0 md:h-screen">
      <div class="md:relative mx-auto md:h-full">
        {{-- @include('layouts.navigation') --}}
        {{-- @livewire('layouts.navigation') --}}

        <div class="flex flex-col md:h-full" x-data="{isOpen: false}">
          <div class="flex grow md:hidden bg-white border-solid border-y border-gray-400 w-full">

            <div x-show="isOpen" class="text-sm mx-6 my-2.5 px-2.5 flex flex-col w-full">

              <div class="flex flex-col items-center w-full text-center">
                {{-- <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg> --}}
                <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 329.249 329.249" xmlns="http://www.w3.org/2000/svg">                    
                  <g id="XMLID_7_">
                    <g id="XMLID_62_">
                      <g id="XMLID_1121_">
                        <path id="XMLID_1122_" style="fill:#F3D8B6;" d="M247.814,233.696c-18.667-6.681-51.458-11.736-51.458-81.376h-29.23h-5.002h-29.23c0,69.64-32.791,74.695-51.458,81.376c0,47.368,68.832,48.824,80.688,53.239v1.537c0,0,0.922-0.188,2.501-0.68
                          c1.579,0.492,2.501,0.68,2.501,0.68v-1.537C178.981,282.521,247.814,281.064,247.814,233.696z"/>
                      </g>
                      <path id="XMLID_1123_" style="fill:#EEC8A2;" d="M196.356,152.321h-29.23h-2.501v135.472c1.579,0.492,2.501,0.68,2.501,0.68v-1.537c11.856-4.414,80.688-5.871,80.688-53.238C229.147,227.015,196.356,221.961,196.356,152.321z"/>
                    </g>
                    <g id="XMLID_58_">
                      <g id="XMLID_1124_">
                        <path id="XMLID_1125_" style="fill:#F3DBC4;" d="M164.627,174.483c-27.454,0-48.409-23.119-57.799-40.456S90.94,54.582,111.168,27.13c19.808-26.883,53.459-13.838,53.459-13.838s33.649-13.045,53.458,13.838
                          c20.226,27.452,13.726,89.56,4.335,106.897C213.028,151.364,192.075,174.483,164.627,174.483z"/>
                      </g>
                      <path id="XMLID_1126_" style="fill:#EDCEAE;" d="M218.085,27.13c-19.81-26.883-53.458-13.838-53.458-13.838h-0.002v161.192c0.001,0,0.001,0,0.002,0c27.449,0,48.401-23.119,57.794-40.456C231.811,116.69,238.311,54.583,218.085,27.13z"/>
                    </g>
                    <g id="XMLID_55_">
                        <ellipse id="XMLID_57_" transform="matrix(0.3543 -0.9351 0.9351 0.3543 46.5967 281.0264)" style="fill:#EDCEAE;" cx="226.798" cy="106.771" rx="17.187" ry="10.048"/>
                        <ellipse id="XMLID_56_" transform="matrix(0.3543 0.9351 -0.9351 0.3543 166.0001 -26.8553)" style="fill:#F3DBC4;" cx="102.447" cy="106.778" rx="17.187" ry="10.048"/>
                    </g>
                    <g id="XMLID_51_">
                      <g id="XMLID_1127_">
                        <path id="XMLID_1128_" style="fill:#B7CAE9;" d="M284.607,288.568v40.681H44.643v-40.681c0-30.431,17.377-56.963,40.605-70.913c6.043-3.641,19.69-7.43,26.844-9.196c5.953-1.488,53.438,22.729,53.438,22.729s48.674-23.218,54.627-21.729
                          c7.154,1.766,17.802,4.554,23.844,8.196C267.23,231.605,284.607,258.137,284.607,288.568z"/>
                      </g>
                      <path id="XMLID_1129_" style="fill:#96B3D4;" d="M244.002,217.655c-6.043-3.641-16.69-6.429-23.844-8.196c-5.953-1.488-54.627,21.729-54.627,21.729s-0.321-0.164-0.906-0.459v98.52h119.982v-40.681
                        C284.607,258.137,267.229,231.605,244.002,217.655z"/>
                    </g>
                    <g id="XMLID_48_">
                      <polygon id="XMLID_1130_" style="fill:#494857;" points="186.292,235.806 164.625,228.973 142.958,235.806 157.272,246.798148.292,329.249 180.958,329.249 171.978,246.798 		"/>
                      <polygon id="XMLID_1131_" style="fill:#33333F;" points="186.292,235.806 164.625,228.973 164.625,329.249 180.958,329.249171.978,246.799"/>
                    </g>
                    <g id="XMLID_45_">
                      <path id="XMLID_1132_" style="fill:#DEDDE0;" d="M212.792,204.681l-48.167,23.441l-48.167-23.441c-11.5,5.5,10.396,38.436,14.833,36.833c10.963-3.96,33.334-10.329,33.334-10.329s22.371,6.369,33.334,10.329
                        C202.396,243.118,224.292,210.181,212.792,204.681z"/>
                      <path id="XMLID_1133_" style="fill:#DEDDE0;" d="M212.792,204.681l-48.167,23.441v3.063c0,0,22.371,6.369,33.334,10.329C202.396,243.118,224.292,210.181,212.792,204.681z"/>
                    </g>
                    <g id="XMLID_41_">
                      <g id="XMLID_1134_">
                        <path id="XMLID_1135_" style="fill:#A7B8D4;" d="M206.619,97.84H178.93c-1.185,0-2.356,0.243-3.431,0.713l-10.874,3.873l-10.874-3.873c-1.075-0.47-2.246-0.713-3.431-0.713h-27.688c-5.509,0-7.411,9.474-7.411,9.474
                          c0,12.532,9.191,22.692,23.756,22.692c8.882,0,17.409-9.44,22.649-17.081h6c5.24,7.641,13.768,17.081,22.649,17.081c14.565,0,23.756-10.16,23.756-22.692C214.03,107.314,212.128,97.84,206.619,97.84z"/>
                      </g>
                      <path id="XMLID_1136_" style="fill:#8AA4C2;" d="M206.619,97.84H178.93c-1.185,0-2.356,0.243-3.431,0.713l-10.874,3.873v10.5h3c5.24,7.641,13.768,17.081,22.649,17.081c14.565,0,23.756-10.16,23.756-22.692C214.03,107.314,212.128,97.84,206.619,97.84z"/>
                    </g>
                    <g id="XMLID_34_">
                      <path id="XMLID_1139_" style="fill:#545465;" d="M221.773,22.976c-2.16,0.019-25.469-13.121-41.382-16.355c-18.766-3.814-18.777-0.529-26.02,1.516c-29.41-9.014-52.972-15.012-51.927,7.003c1.759,37.07-9.345,65.989-4.863,78.938
                        s8.466,23.407,8.466,23.407s0.996,3.565,2.988-16.854s-4.579-42.372,11.137-40.379c15.716,1.992,10.785,14.805,44.436,14.805c33.391,0,28.719-12.813,44.436-14.805c15.716-1.992,9.145,19.96,11.137,40.379s2.988,16.854,2.988,16.854
                        s3.984-10.458,8.466-23.407C236.119,81.129,241.125,22.806,221.773,22.976z"/>
                      <path id="XMLID_1142_" style="fill:#494857;" d="M221.773,22.976c-2.16,0.019-25.469-13.121-41.382-16.355c-7.986-1.624-12.57-1.958-15.766-1.653v70.088c33.372-0.004,28.706-12.813,44.419-14.804c15.716-1.992,9.145,19.96,11.137,40.379
                        s2.988,16.854,2.988,16.854s3.984-10.459,8.466-23.407C236.119,81.129,241.125,22.807,221.773,22.976z"/>
                    </g>
                    <g id="XMLID_8_">
                        <ellipse id="XMLID_33_" transform="matrix(0.3543 0.9351 -0.9351 0.3543 166.0001 -26.8553)" style="fill:#F3DBC4;" cx="102.447" cy="106.778" rx="17.187" ry="10.048"/>
                        <ellipse id="XMLID_32_" transform="matrix(0.3543 -0.9351 0.9351 0.3543 46.5967 281.0264)" style="fill:#EDCEAE;" cx="226.798" cy="106.771" rx="17.187" ry="10.048"/>
                    </g>
                  </g>
                </svg>
                <span >{{ Auth::user()->name }}</span>
              </div>

              <div class="text-sm flex flex-col gap-y-1 text-left" style="">
                <a href="{{ route('profile.show') }}" class="block py-2 px-4 hover:bg-gray-800 hover:text-white rounded">
                    Profile
                </a>
                <a href="#" class="block py-2 px-4 hover:bg-gray-800 hover:text-white rounded">
                    Privacy
                </a>
                <a href="#" class="block py-2 px-4 hover:bg-gray-800 hover:text-white rounded">
                    Settings
                </a>
              </div>
            </div>
          </div>

          <div class= "flex flex-row items-center justify-between md:flex-col md:h-full">
            <div class="flex-1 md:h-full p-2">
              <ul class="list-reset flex flex-row align-left md:flex-col text-center md:text-left">
                <li class="mr-3 flex-1 w-full">
                  <a href="{{ route('dashboard') }}" class="flex md:flex-row flex-col items-center py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline rounded hover:bg-gray-200 {{ request()->routeIs('dashboard') ? 'bg-gray-200' : ''  }}">
                    <svg class="h-6 w-6 md:mr-3"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor">
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                      />
                    </svg>
                    <span class="block md:inline-block pb-1 md:pb-0 text-xs md:text-base">Dashboard</span>
                  </a>
                </li>
                <li class="mr-3 flex-1 w-full">
                  <a href="{{ route('footprints') }}" class="flex md:flex-row flex-col items-center py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline rounded hover:bg-gray-200 {{ request()->routeIs('footprints') ? 'bg-gray-200' : ''  }}">
                    <svg class="fill-current h-6 w-6 md:mr-3"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 512 512"
                      stroke="currentColor">
                      <g id="XMLID_1507_">
                        <circle id="XMLID_2979_" fill-rule="evenodd" cx="58.132" cy="58.132" r="30.33"/>
                        <circle id="XMLID_2975_" fill-rule="evenodd" cx="58.132" cy="411.978" r="30.33"/>
                        <circle id="XMLID_2971_" fill-rule="evenodd" cx="401.868" cy="128.901" r="30.33"/>
                        <circle id="XMLID_2967_" fill-rule="evenodd" cx="280.549" cy="422.088" r="30.33"/>
                        <circle id="XMLID_2944_" fill-rule="evenodd" cx="270.44" cy="37.912" r="30.33"/>
                        <g id="XMLID_814_">
                          <path id="XMLID_2962_" fill-rule="evenodd" d="M159.231,207.253H58.132c-4.188,0-7.582-3.394-7.582-7.582V88.462
                            c0-4.188,3.395-7.582,7.582-7.582s7.582,3.394,7.582,7.582v103.626h93.516c4.188,0,7.582,3.394,7.582,7.582
                            C166.813,203.858,163.418,207.253,159.231,207.253z"/>
                        </g>
                        <g id="XMLID_1648_">
                          <path id="XMLID_1665_" fill-rule="evenodd" d="M58.132,96.044c20.905,0,37.912-17.007,37.912-37.912S79.037,20.22,58.132,20.22
                            S20.22,37.227,20.22,58.132S37.227,96.044,58.132,96.044z M58.132,35.385c12.543,0,22.747,10.205,22.747,22.747
                            S70.675,80.879,58.132,80.879S35.385,70.674,35.385,58.132S45.589,35.385,58.132,35.385z"/>
                          <path id="XMLID_1699_" fill-rule="evenodd" d="M149.121,247.692c4.188,0,7.582-3.394,7.582-7.582V45.495h76.587
                            c3.522,17.284,18.84,30.33,37.149,30.33c20.905,0,37.912-17.007,37.912-37.912S291.345,0,270.44,0
                            c-18.309,0-33.627,13.046-37.149,30.33h-84.17c-4.188,0-7.582,3.394-7.582,7.582V240.11
                            C141.538,244.298,144.933,247.692,149.121,247.692z M270.44,15.165c12.543,0,22.747,10.205,22.747,22.747
                            s-10.204,22.747-22.747,22.747c-12.543,0-22.747-10.205-22.747-22.747S257.896,15.165,270.44,15.165z"/>
                          <path id="XMLID_1702_" fill-rule="evenodd" d="M189.56,343.736c-4.188,0-7.582,3.394-7.582,7.582v53.077H95.281
                            c-3.522-17.284-18.84-30.33-37.149-30.33c-20.905,0-37.912,17.007-37.912,37.912s17.007,37.912,37.912,37.912
                            c18.309,0,33.627-13.046,37.149-30.33h94.279c4.188,0,7.582-3.394,7.582-7.582v-60.659
                            C197.143,347.131,193.748,343.736,189.56,343.736z M58.132,434.725c-12.543,0-22.747-10.205-22.747-22.747
                            c0-12.543,10.204-22.747,22.747-22.747s22.747,10.205,22.747,22.747C80.879,424.521,70.675,434.725,58.132,434.725z"/>
                          <path id="XMLID_1705_" fill-rule="evenodd" d="M381.648,283.077h-60.659c-4.188,0-7.582,3.394-7.582,7.582
                            c0,4.188,3.395,7.582,7.582,7.582h53.077v116.264h-56.367c-3.522-17.284-18.84-30.33-37.149-30.33
                            c-20.905,0-37.912,17.007-37.912,37.912S259.645,460,280.549,460c18.309,0,33.627-13.046,37.149-30.33h63.95
                            c4.188,0,7.582-3.394,7.582-7.582V290.659C389.231,286.471,385.836,283.077,381.648,283.077z M280.549,444.835
                            c-12.543,0-22.747-10.205-22.747-22.747c0-12.543,10.204-22.747,22.747-22.747c12.543,0,22.747,10.205,22.747,22.747
                            C303.297,434.63,293.093,444.835,280.549,444.835z"/>
                          <path id="XMLID_1708_" fill-rule="evenodd" d="M310.879,192.088c-4.188,0-7.582,3.394-7.582,7.582
                            c0,4.188,3.395,7.582,7.582,7.582h90.989c4.188,0,7.582-3.394,7.582-7.582v-33.62c17.284-3.522,30.33-18.84,30.33-37.149
                            c0-20.905-17.007-37.912-37.912-37.912s-37.912,17.007-37.912,37.912c0,18.309,13.046,33.627,30.33,37.149v26.038H310.879z
                            M379.121,128.901c0-12.543,10.204-22.747,22.747-22.747c12.543,0,22.747,10.205,22.747,22.747s-10.204,22.747-22.747,22.747
                            C389.325,151.648,379.121,141.444,379.121,128.901z"/>
                          <path id="XMLID_1709_" fill-rule="evenodd" d="M40.44,290.659c0,4.188,3.395,7.582,7.582,7.582h90.989
                            c4.188,0,7.582-3.394,7.582-7.582c0-4.188-3.395-7.582-7.582-7.582H48.022C43.834,283.077,40.44,286.471,40.44,290.659z"/>
                          <path id="XMLID_1710_" fill-rule="evenodd" d="M432.198,252.747H331.099c-4.188,0-7.582,3.394-7.582,7.582
                            c0,4.188,3.395,7.582,7.582,7.582h101.099c4.188,0,7.582-3.394,7.582-7.582C439.78,256.142,436.385,252.747,432.198,252.747z"/>
                        </g>
                        <g id="XMLID_525_">
                          <path id="XMLID_2018_" fill-rule="evenodd" d="M275.688,230.543v-37.234c0-25.233-20.455-45.688-45.688-45.688
                            s-45.688,20.455-45.688,45.688v37.234h-35.845v-40.329c0-45.029,36.503-81.532,81.532-81.532s81.532,36.503,81.532,81.532v40.329
                            H275.688z"/>
                        </g>
                        <g id="XMLID_524_">
                          <path id="XMLID_2586_" fill-rule="evenodd" d="M314.209,363.169H145.791c-16.534,0-29.937-13.403-29.937-29.937V230.543h228.29
                            v102.689C344.145,349.766,330.742,363.169,314.209,363.169z"/>
                        </g>
                        <path id="XMLID_2022_" style="opacity:0.49;fill:#000000;" d="M320.989,230.543v80.4c0,16.715-13.55,30.266-30.266,30.266H122.964
                          c-2.097,0-4.145-0.214-6.122-0.62c3.401,12.993,15.219,22.58,29.278,22.58H313.88c16.715,0,30.266-13.55,30.266-30.266v-102.36
                          L320.989,230.543z"/>
                        <g id="XMLID_523_">
                          <path id="XMLID_2956_" fill-rule="evenodd" d="M230,320.745c-4.188,0-7.582-3.394-7.582-7.582v-32.613
                            c0-4.188,3.395-7.582,7.582-7.582s7.582,3.394,7.582,7.582v32.613C237.582,317.351,234.188,320.745,230,320.745z"/>
                        </g>
                      </g>
                    </svg>
                    <span class="block md:inline-block pb-1 md:pb-0 text-xs md:text-base">Footprintsssss</span>
                  </a>

                </li>
              </ul>
            </div>
            <div class="flex text-center md:text-left md:w-full md:mt-auto md:mb-2 p-2">
              <div class="block md:hidden  hover:bg-gray-800 hover:text-white rounded">
                <!--Toggle button (hidden on large screens)-->
                <button
                  @click="isOpen = !isOpen"
                  type="button"
                  class="block lg:hidden text-gray-500" >
                  <svg
                    class="h-6 w-6 fill-current"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24" >
                    <path
                      fill-rule="evenodd"
                      d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
                    />
                  </svg>
                </button>
              </div>
              <div class="hidden md:block w-full" x-data="{open: false}">
                <div @click="open = !open" class="flex items-center justify-between hover:bg-gray-800 hover:text-white cursor-pointer py-2.5 px-4 rounded">
                  <div class="flex flex-col items-center w-full">
                    {{-- <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg> --}}
                    <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 329.249 329.249" xmlns="http://www.w3.org/2000/svg">                    
                      <g id="XMLID_7_">
                        <g id="XMLID_62_">
                          <g id="XMLID_1121_">
                            <path id="XMLID_1122_" style="fill:#F3D8B6;" d="M247.814,233.696c-18.667-6.681-51.458-11.736-51.458-81.376h-29.23h-5.002
                              h-29.23c0,69.64-32.791,74.695-51.458,81.376c0,47.368,68.832,48.824,80.688,53.239v1.537c0,0,0.922-0.188,2.501-0.68
                              c1.579,0.492,2.501,0.68,2.501,0.68v-1.537C178.981,282.521,247.814,281.064,247.814,233.696z"/>
                          </g>
                          <path id="XMLID_1123_" style="fill:#EEC8A2;" d="M196.356,152.321h-29.23h-2.501v135.472c1.579,0.492,2.501,0.68,2.501,0.68
                            v-1.537c11.856-4.414,80.688-5.871,80.688-53.238C229.147,227.015,196.356,221.961,196.356,152.321z"/>
                        </g>
                        <g id="XMLID_58_">
                          <g id="XMLID_1124_">
                            <path id="XMLID_1125_" style="fill:#F3DBC4;" d="M164.627,174.483c-27.454,0-48.409-23.119-57.799-40.456
                              S90.94,54.582,111.168,27.13c19.808-26.883,53.459-13.838,53.459-13.838s33.649-13.045,53.458,13.838
                              c20.226,27.452,13.726,89.56,4.335,106.897C213.028,151.364,192.075,174.483,164.627,174.483z"/>
                          </g>
                          <path id="XMLID_1126_" style="fill:#EDCEAE;" d="M218.085,27.13c-19.81-26.883-53.458-13.838-53.458-13.838h-0.002v161.192
                            c0.001,0,0.001,0,0.002,0c27.449,0,48.401-23.119,57.794-40.456C231.811,116.69,238.311,54.583,218.085,27.13z"/>
                        </g>
                        <g id="XMLID_55_">
                          
                            <ellipse id="XMLID_57_" transform="matrix(0.3543 -0.9351 0.9351 0.3543 46.5967 281.0264)" style="fill:#EDCEAE;" cx="226.798" cy="106.771" rx="17.187" ry="10.048"/>
                          
                            <ellipse id="XMLID_56_" transform="matrix(0.3543 0.9351 -0.9351 0.3543 166.0001 -26.8553)" style="fill:#F3DBC4;" cx="102.447" cy="106.778" rx="17.187" ry="10.048"/>
                        </g>
                        <g id="XMLID_51_">
                          <g id="XMLID_1127_">
                            <path id="XMLID_1128_" style="fill:#B7CAE9;" d="M284.607,288.568v40.681H44.643v-40.681c0-30.431,17.377-56.963,40.605-70.913
                              c6.043-3.641,19.69-7.43,26.844-9.196c5.953-1.488,53.438,22.729,53.438,22.729s48.674-23.218,54.627-21.729
                              c7.154,1.766,17.802,4.554,23.844,8.196C267.23,231.605,284.607,258.137,284.607,288.568z"/>
                          </g>
                          <path id="XMLID_1129_" style="fill:#96B3D4;" d="M244.002,217.655c-6.043-3.641-16.69-6.429-23.844-8.196
                            c-5.953-1.488-54.627,21.729-54.627,21.729s-0.321-0.164-0.906-0.459v98.52h119.982v-40.681
                            C284.607,258.137,267.229,231.605,244.002,217.655z"/>
                        </g>
                        <g id="XMLID_48_">
                          <polygon id="XMLID_1130_" style="fill:#494857;" points="186.292,235.806 164.625,228.973 142.958,235.806 157.272,246.798 
                            148.292,329.249 180.958,329.249 171.978,246.798 		"/>
                          <polygon id="XMLID_1131_" style="fill:#33333F;" points="186.292,235.806 164.625,228.973 164.625,329.249 180.958,329.249 
                            171.978,246.799 		"/>
                        </g>
                        <g id="XMLID_45_">
                          <path id="XMLID_1132_" style="fill:#DEDDE0;" d="M212.792,204.681l-48.167,23.441l-48.167-23.441
                            c-11.5,5.5,10.396,38.436,14.833,36.833c10.963-3.96,33.334-10.329,33.334-10.329s22.371,6.369,33.334,10.329
                            C202.396,243.118,224.292,210.181,212.792,204.681z"/>
                          <path id="XMLID_1133_" style="fill:#DEDDE0;" d="M212.792,204.681l-48.167,23.441v3.063c0,0,22.371,6.369,33.334,10.329
                            C202.396,243.118,224.292,210.181,212.792,204.681z"/>
                        </g>
                        <g id="XMLID_41_">
                          <g id="XMLID_1134_">
                            <path id="XMLID_1135_" style="fill:#A7B8D4;" d="M206.619,97.84H178.93c-1.185,0-2.356,0.243-3.431,0.713l-10.874,3.873
                              l-10.874-3.873c-1.075-0.47-2.246-0.713-3.431-0.713h-27.688c-5.509,0-7.411,9.474-7.411,9.474
                              c0,12.532,9.191,22.692,23.756,22.692c8.882,0,17.409-9.44,22.649-17.081h6c5.24,7.641,13.768,17.081,22.649,17.081
                              c14.565,0,23.756-10.16,23.756-22.692C214.03,107.314,212.128,97.84,206.619,97.84z"/>
                          </g>
                          <path id="XMLID_1136_" style="fill:#8AA4C2;" d="M206.619,97.84H178.93c-1.185,0-2.356,0.243-3.431,0.713l-10.874,3.873v10.5h3
                            c5.24,7.641,13.768,17.081,22.649,17.081c14.565,0,23.756-10.16,23.756-22.692C214.03,107.314,212.128,97.84,206.619,97.84z"/>
                        </g>
                        <g id="XMLID_34_">
                          <path id="XMLID_1139_" style="fill:#545465;" d="M221.773,22.976c-2.16,0.019-25.469-13.121-41.382-16.355
                            c-18.766-3.814-18.777-0.529-26.02,1.516c-29.41-9.014-52.972-15.012-51.927,7.003c1.759,37.07-9.345,65.989-4.863,78.938
                            s8.466,23.407,8.466,23.407s0.996,3.565,2.988-16.854s-4.579-42.372,11.137-40.379c15.716,1.992,10.785,14.805,44.436,14.805
                            c33.391,0,28.719-12.813,44.436-14.805c15.716-1.992,9.145,19.96,11.137,40.379s2.988,16.854,2.988,16.854
                            s3.984-10.458,8.466-23.407C236.119,81.129,241.125,22.806,221.773,22.976z"/>
                          <path id="XMLID_1142_" style="fill:#494857;" d="M221.773,22.976c-2.16,0.019-25.469-13.121-41.382-16.355
                            c-7.986-1.624-12.57-1.958-15.766-1.653v70.088c33.372-0.004,28.706-12.813,44.419-14.804c15.716-1.992,9.145,19.96,11.137,40.379
                            s2.988,16.854,2.988,16.854s3.984-10.459,8.466-23.407C236.119,81.129,241.125,22.807,221.773,22.976z"/>
                        </g>
                        <g id="XMLID_8_">
                          
                            <ellipse id="XMLID_33_" transform="matrix(0.3543 0.9351 -0.9351 0.3543 166.0001 -26.8553)" style="fill:#F3DBC4;" cx="102.447" cy="106.778" rx="17.187" ry="10.048"/>
                          
                            <ellipse id="XMLID_32_" transform="matrix(0.3543 -0.9351 0.9351 0.3543 46.5967 281.0264)" style="fill:#EDCEAE;" cx="226.798" cy="106.771" rx="17.187" ry="10.048"/>
                        </g>
                      </g>
                    </svg>
                    <span >{{ Auth::user()->name }}</span>
                  </div>
                  <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style=""><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                  <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>    
                </div>
                <div x-show="open" class="text-sm border-l-2 border-gray-800 mx-6 my-2.5 px-2.5 flex flex-col gap-y-1" style="">
                  <a href="{{ route('profile.show') }}" class="block py-2 px-4 hover:bg-gray-800 hover:text-white rounded">
                      Profile
                  </a>
                  <a href="#" class="block py-2 px-4 hover:bg-gray-800 hover:text-white rounded">
                      Privacy
                  </a>
                  <a href="#" class="block py-2 px-4 hover:bg-gray-800 hover:text-white rounded">
                      Settings
                  </a>
                  <!-- Authentication -->
                  <div class="block py-2 px-4 hover:bg-gray-800 hover:text-white rounded">
                    <form method="POST" action="{{ route('logout') }}" class="hover:bg-gray-800 hover:text-white">
                      @csrf
                      
                      <a href="{{ route('logout') }}" class="block py-2 px-4 hover:bg-gray-800 hover:text-white rounded"
                            onclick="event.preventDefault(); this.closest('form').submit();" >
                        Logout
                      </a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </div>
@endsection
