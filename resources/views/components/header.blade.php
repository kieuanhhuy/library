@props(['count'])

<header
        class="z-20 small:hidden flex items-center text-white justify-between w-full h-[71px] pr-[30px] mx-auto bg-[#4558BE]">
    <!-- logo -->
    <div class="logo-font inline-flex bg-[#3F51B5] py-[18px] px-[30px]">
        <a class="_o6689fn" href="#">
            <div class="block">
                <a href="{{route('dashboard')}}"
                   class="text-[20px] font-medium">
                    <div class="flex">
                        <img src='{{asset('img/logo.svg')}}' alt="{{__('Online
                        biblioteka')}}" title="{{__('Online biblioteka')}}"
                        width="35px" height="35px">
                        <p class="text-[20px] mt-[5px]">&nbsp;&nbsp;{{__('Online biblioteka')}}</p>
                    </div>
                </a>
            </div>
        </a>
    </div>
    <!-- end logo -->

    <!-- login -->
    <div class="flex-initial">
        <div class="relative flex items-center justify-end">
            <div class="flex items-center">

                @if (Auth::user()->type->id == 2 || Auth::user()->type->id == 3)
                <!-- Notification Icon -->
                <div class="relative block">
                    <a style="pointer-events: none;" style="cursor:default"
                       href="{{route('dashboard-activity')}}"
                       class="relative inline-block px-3 py-2 focus:outline-none"
                       aria-label="Notification">
                        <div class="flex items-center h-5">
                            <div class="_xpkakx">
                                <span
                                        class="transition duration-300 ease-in bg-[#606FC7] text-[25px] rounded-full px-[11px] py-[7px] ">
                                    <i style="pointer-events:all;cursor: pointer;"
                                       class="far fa-bell" id="bell"></i>
                                </span>
                            </div>
                        </div>
                    </a>

                    @if ($count != 0)
                    <span class="absolute bg-[#EF4F4C] text-[11px] font-medium text-white right-[10px] top-[-10px] pl-[4px] pr-[5px] pt-[1px] text-center rounded no-select">
                            {{$count}}
                    </span>
                    @endif

                </div>
                <!-- Add Icon -->
                <a style="pointer-events: none;"
                   class="inline-block border-l-[1px] border-gray-300 px-3"
                   href="#" aria-label="Add something" id="dropdownCreate">
                    <span
                            class="transition duration-300 ease-in bg-[#606FC7] text-[25px] rounded-full px-[11px] py-[7px]  ">
                        <i style="pointer-events:all;cursor: pointer;"
                           class="fas fa-plus" id="plus"></i>
                    </span>
                </a>
                <div
                        class="z-10 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-create">
                    <div class="absolute right-[12px] w-56 mt-[35px] origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                         aria-labelledby="headlessui-menu-button-1"
                         id="headlessui-menu-items-117" role="menu">
                        <div class="py-1">
                            @if (Auth::user()->type->id == 3)
                            <a href="{{route('store-admin')}}" tabindex="0"
                               class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                               role="menuitem">
                                <i class=" fas fa-user-shield mr-[5px] ml-[3px] py-1"></i>
                                <span id="scale_link_ad" class="px-4 py-0">{{__('Administrator')}}</span>
                            </a>
                            <a href="{{route('new-librarian')}}" tabindex="0"
                               class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                               role="menuitem">
                                <i class="far fa-address-book mr-[8px] ml-[5px] py-1"></i>
                                <span id="scale_link_l" class="px-4 py-0">{{__('Bibliotekar')}}</span>
                            </a>
                            @endif
                            <a href="{{route('store-student')}}" tabindex="0"
                               class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                               role="menuitem">
                                <i class="fas fa-users mr-[5px] ml-[3px] py-1"></i>
                                <span id="scale_link_s" class="px-4 py-0">{{__('Učenik')}}</span>
                            </a>
                            <a href="{{route('new-book')}}" tabindex="0"
                               class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                               role="menuitem">
                                <i class="far fa-copy mr-[10px] ml-[5px] py-1"></i>
                                <span id="scale_link_b" class="px-4 py-0">
                                 {{__('Knjiga')}}
                                </span>
                            </a>
                            <a href="{{route('new-author')}}" tabindex="0"
                               class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                               role="menuitem">
                                <i class="far fa-address-book mr-[10px] ml-[5px] py-1"></i>
                                <span id="scale_link_au" class="px-4 py-0">{{__('Autor')}}</span>
                            </a>
                        </div>
                    </div>
                </div>
                @endif

                {{-- <!-- nullable() logo -->
                <a href="https://perisicnikola37.github.io/nullable"
                   target="_blank">
                    <img style="height: 2%;border-radius: 30px;margin-left: 15px"
                         width="38px"
                         src="https://i.postimg.cc/CMnpbPWn/nullable.jpg"
                         alt="nullable() logo">
                </a>
                <!-- school logo -->
                <a href="https://elektropg.online/ets/" target="_blank">
                    <img style="height: 2%;border-radius: 30px;margin-left: 15px"
                         width="42px"
                         src="https://i.postimg.cc/cHNTcVzk/elektro-logo.png"
                         alt="Vaso Aligrudić">
                </a> --}}

                <form class="flex" method="get"
                      action="{{ route('changeLang') }}">
                    <button class="outline-none" name="lang" type="submit"
                            value="sr" {{ session()->get('locale') == 'sr' ?
                        'selected' : '' }}>
                        <img width="30"
                             src="https://cdn.countryflags.com/thumbs/serbia/flag-round-250.png"
                             alt="{{__('Srpski')}}" title="{{__('Srpski')}}">
                    </button>

                    <button class="ml-3 outline-none" name="lang" type="submit"
                            value="en" {{ session()->get('locale') == 'en' ?
                        'selected' : '' }}>
                        <img width="30"
                             src="https://vectorflags.s3.amazonaws.com/flags/uk-circle-01.png"
                             alt="{{__('Engleski')}}"
                             title="{{__('Engleski')}}">
                    </button>

                    <button class="ml-3 outline-none" name="lang" type="submit"
                            value="it" {{ session()->get('locale') == 'it' ?
                        'selected' : '' }}>
                        <img width="30"
                             src="https://cdn.countryflags.com/thumbs/italy/flag-round-250.png"
                             alt="{{__('Italijanski')}}"
                             title="{{__('Italijanski')}}">
                    </button>

                    <button class="ml-3 outline-none" name="lang" type="submit"
                            value="fr" {{ session()->get('locale') == 'fr' ?
                        'selected' : '' }}>
                        <img width="30"
                             src="https://cdn-icons-png.flaticon.com/512/197/197560.png"
                             alt="{{__('Francuski')}}"
                             title="{{__('Francuski')}}">
                    </button>

                    <button class="ml-3 outline-none" name="lang" type="submit"
                            value="zh" {{ session()->get('locale') == 'zh' ?
                        'selected' : '' }}>
                        <img width="30"
                             src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Circle_Flag_of_the_People%27s_Republic_of_China.svg/2048px-Circle_Flag_of_the_People%27s_Republic_of_China.svg.png"
                             alt="{{__('Kineski')}}" title="{{__('Kineski')}}">
                    </button>

                    <button class="ml-3 outline-none" name="lang" type="submit" value="vi" {{ session()->get('locale') == 'vi' ? 'selected' : '' }}>
                        <img width="30" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIALcAwwMBIgACEQEDEQH/xAAbAAEAAwEBAQEAAAAAAAAAAAAABAYHBQMCAf/EADwQAAEDAgIGBgkCBQUAAAAAAAABAgMEBRESBhUhVZTREyIxQVFhBxQXMnFygaHipMGRk7Hh8CNDYnOy/8QAGwEBAAMBAQEBAAAAAAAAAAAAAAQFBgIBAwf/xAAvEQABAgIJAwMEAwEAAAAAAAAAAQIDBAUREhMhQVFS0TGRoRVxsSKBwfAG4fFh/9oADAMBAAIRAxEAPwDm67u+9a7iHcxru771ruIdzIAKWymh+oXUPanYn67u+9a7iHcxru771ruIdzIAFlNBdQ9qdifru771ruIdzGu7vvWu4h3MgAWU0F1D2p2J+u7vvWu4h3Ma7u+9a7iHcyABZTQXUPanYn67u+9a7iHcxru771ruIdzIAFlNBdQ9qdifru771ruIdzGu7vvWu4h3MgAWU0F1D2p2J+u7vvWu4h3Ma7u+9a7iHcyABZTQXUPanYn67u+9a7iHcxru771ruIdzIAFlNBdQ9qdifru771ruIdzGu7vvWu4h3MgAWU0F1D2p2J+u7vvWu4h3Ma7u+9a7iHcyABZTQXUPanYn67u+9a7iHcxru771ruIdzIAFlNBdQ9qdifru771ruIdzGu7vvWu4h3MgAWU0F1D2p2J+u7vvWu4h3MEACymguoe1OwAB6dgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA9qOmdW1cFJH70z0Ynlj2/Y8VURK1PFVEStT4likhViSNVqvjbI3HvavYp8F19IttZAygq4W4MYz1Z2Hgm1v7lKI8pMJMwUipmfGVjpHhJETMAAkn3AAAAAAAAAAAAAAAAAAAAAAAAAAAAAABafR7ResXl1S5MWU0eKfMuxP3KsaboDRJTWJJ1Tr1L1fj5diFZS8e6lXVdVw/fsV9JxruWXVcP37HQ0nodYWOqgRMXo3Oz5k2oZEm1DcdnYvZ3mPaQUS2+81dNhg1siq34LtQrv4/HwfBX35/BBoSNg6Evvz+DngA0hfAAAAAAAAAAAAAAAAAAAAAAA9aZsDpmtqp
HxxKvWfGzMrfp3hVqSsKtSVnkC60ug1LWQNnpbz0sTkxRzYdn/o9fZ6zejv5H5FatLyaLUr/C8EBaTlUWpXeF4KKC8+z1N6fp/wAh7PU3p+n/ACHrElv8LwPVJTf4XgpMEL6ieOCJP9SV6Mb8VXA2qmgZS00VPEmDImIxv0Qq9m0KZbbnBWvrunSFVckfQ5cVwwRccV7C2FDTE9DmXNbCWtE+SmpScZMOakNa0T5BQfSTRZKqkrmpslasT1/5JtT7Y/wL8c6/2ll6trqN8nRLna9kmXHKqeXwxQh0fMJLzLXu6Z+xEkY6QI7Xr0zMfBefZ6m9P0/5D2epvT9P+RqvWJLf4Xg0nqkpv8LwUYF6T0etw23Rcf8Ao/I/fZ6zejv5H5HnrElv8LweeqSm7wvBRAdq/wBpoLQ7oI7k6qqu+NsSIjPmXH7HFJ8KK2KxHt6e1XyTYcRsVtpvQAA+h2AAAAAAAAAAAAAAAdCzXmss8/SUj+qvvxO913+eJpVh0hor1HhC7o6hqdeB67U808UMlPqOR8UjZInuZIxcWvauCopXT1GwptK+jteSBOUfDmUr6O15NvBTNG9M2zZKW8KjJOxtQmxHfN4L5lzRUVEVFRUXaip3mPmZWLLPsxE4Uy8xLRJd1l6AAEc+AAAAAOder1R2aDPVPxkVOpE33nHcOG+I5GsStVOmMc91lqVqTppoqeJ808jY4mJi571wREKFpHpnJUZqa0KscPY6dUwc/wCHghwr7fq29TY1DskDVxZAxeqnmvipyzUyFDMhVPjYu0yTk0klRTYdT42K6ZJyO9VVVVV2qq94AL0uAAAAAAAAAAAAAAAAAAAAAAXL0eV9e+vfQ9KslE2JXq1+3o+xEyr3Yr3FNNF9HVD0FrmrHJ16l+Dflbs/riVlLvY2UdaSuvBPcr6Ue1ss60nXp7lsABiTIgAAEC+1FTSWarqaJG9PFGr25kxTBO1cPhiZDPPLUzPnqJXyyvXFz3riqm2Oa17VY9MWuTBU8UUxi5UbrfcKmjd/syK1PNO77YGl/j72VPZVj1+378l/Qjm/W2rH8EYAGkL8AAAAAAAAAAAAAAAAAAAAAAAA+o2OlkZHGmL3uRrU81Nnt1K2hoKelYmDYo0aZroTQ+u3+FXJiyBFld9Oz7mpOVERXOVERNqqvcZen49b2wUyx7mdpqNW9sJMsQca/wCkdFZWZJHJLVKmLYGrt+K+CHE0k0zSLPS2ZyOk7HVGGKN+XxXzKI97pHukkc573Li5zlxVV81OJChnRKokfBNM14+TmSopYn1xsE0z/ou1l05V07o7wxrY3uxbLGnueSp4eZd45GSxtkie18b0xa5q4oqeRiB2NH9IauySYRqstM5cXwOXZ8U8FJk9QrHpbl8F0yXglTlEtelqDgumRrJnfpGouiucFY1OrOzK75m/2/oXa0Xaju9P01HJiqe/GvvM+KHP02ovXLBMrUxfAqSt+nb9ino6I6VnGo9Ksl+5VSL3S80iOwyX7mWAA25rwAAAAAAAAAAAAAAAAAAAAAAAC8aEyUtoslTda+RI2zSZGY9rmt7kTv24/wADi6R6T1V5csMeanokXZEi7X+bl/bsOLJNJK2Nkj3ObE3KxqrsankeZBhyENI7o78XL0/5p/pDZJsSMsZ+Ll8AAE4mAAAHtSVdRRVDKikmfDKxdjmr/mKGh6PaV0t3j9SuKMgqXtyL3Mlx8PBfIzYEOckYU036sFyXMiTUnDmU+rBclJFwpX0VfU0kidaGRzPp3fbAjnpNNJPJ0kz1e/BEVzlxVcEwQ8yU2uylrqSm12UtdQADo9AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPnOgzoACRdNGdBnQAC6aM6DOgAF00Z0GdAALpozoM6AAXTRnQZ0AAumjOgzoABdNGdBnQAC6aM6DOgAF00Z0GdAALpozoM6AAXTRnQZ0AAumjOgAAumn//Z" alt="{{__('Tiếng Việt')}}" title="{{__('Tiếng Việt')}}">
                    </button>

                    <button class="ml-3 outline-none" name="lang" type="submit"
                            value="ru" {{ session()->get('locale') == 'ru' ?
                        'selected' : '' }}>
                        <img width="30"
                             src="https://cdn.countryflags.com/thumbs/russia/flag-round-250.png"
                             alt="{{__('Ruski')}}" title="{{__('Ruski')}}">
                    </button>

                    <button class="ml-3 outline-none" name="lang" type="submit"
                            value="hi" {{ session()->get('locale') == 'hi' ?
                        'selected' : '' }}>
                        <img width="30"
                             src="https://cdn-icons-png.flaticon.com/512/197/197419.png"
                             alt="{{__('Hindi')}}" title="{{__('Hindi')}}">
                    </button>
                </form>

                <!-- User Profile Photo -->
                <div class="ml-[10px] relative block">
                    <a href="#"
                       class="relative inline-block px-3 py-2 focus:outline-none"
                       id="dropdownProfile"
                       aria-label="User profile">
                        <div class="flex items-center h-5">
                            <div class="w-[40px] h-[40px] mt-[15px]">

                                @if (Auth::user()->type->name == 'librarian')
                                <img
                                        class="rounded-full"
                                        src="{{Auth::user()->photo == 'placeholder' ? '/img/profileImg-default.jpg' : '/storage/librarians/' . Auth::user()->photo}}"
                                        alt="{{Auth::user()->username}}"
                                        title="{{Auth::user()->username}}"/>
                                @elseif(Auth::user()->type->name == 'student')
                                <img
                                        class="rounded-full"
                                        src="{{Auth::user()->photo == 'placeholder' ? '/img/profileImg-default.jpg' : '/storage/students/' . Auth::user()->photo}}"
                                        alt="{{Auth::user()->username}}"
                                        title="{{Auth::user()->username}}"/>
                                @else
                                <img
                                        class="rounded-full"
                                        src="{{Auth::user()->photo == 'placeholder' ? '/img/profileImg-default.jpg' : '/storage/administrators/' . Auth::user()->photo}}"
                                        alt="{{Auth::user()->username}}"
                                        title="{{Auth::user()->username}}"/>
                                @endif

                            </div>

                        </div>
                    </a>
                </div>
                <div class="z-10 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-profile">
                    <div class="absolute right-[12px] w-56 mt-[35px] origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                         aria-labelledby="headlessui-menu-button-1"
                         id="headlessui-menu-items-117" role="menu">
                        <div class="py-1">
                            @if (Auth::user()->type->name == 'librarian')
                            <a href="{{route('show-librarian', Auth::user()->username)}}"
                               tabindex="0"
                               class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                               role="menuitem">
                                @elseif (Auth::user()->type->name == 'student')
                                <a href="{{route('show-student', Auth::user()->username)}}"
                                   tabindex="0"
                                   class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                   role="menuitem">
                                    @else
                                    <a href="{{route('show-admin', Auth::user()->username)}}"
                                       tabindex="0"
                                       class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                       role="menuitem">
                                        @endif
                                        <i class="fas fa-user-circle mr-[8px] ml-[5px] py-1"></i>
                                        <span id="scale_link_profile"
                                              class="px-4 py-0">{{__('Profil')}}</span>
                                    </a>
                                    <a href="{{route('logout')}}" tabindex="0"
                                       class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                       role="menuitem">
                                        <i class="fas fa-sign-out-alt mr-[5px] ml-[5px] py-1"></i>
                                        <span id="scale_link_logout"
                                              class="px-4 py-0">{{__('Odjavi se')}}</span>
                                    </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end login -->
</header>