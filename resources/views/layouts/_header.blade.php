<div class="mask-l"
     style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;"></div>
<!--removed by integration-->
<header>
    <div class="container b-header__box b-relative">

        <div class="b-header-r b-right b-header-r--icon">

            <div class="b-top-nav-show-slide f-top-nav-show-slide b-right j-top-nav-show-slide"><i
                        class="fa fa-align-justify"></i></div>
            <nav class="b-top-nav f-top-nav b-right j-top-nav">
                <ul class="b-top-nav__1level_wrap">
                    <li class="b-top-nav__1level f-top-nav__1level is-active-top-nav__1level f-primary-b" id="home">
                        <a href="/"><i class="fa fa-home b-menu-1level-ico"></i>Home <span
                                    class="b-ico-dropdown"><i
                                        class="fa fa-arrow-circle-down"></i></span></a>

                    </li>

                    <li class="b-top-nav__1level f-top-nav__1level f-primary-b" id="portfolio">
                        <a href="#"><i class="fa fa-picture-o b-menu-1level-ico"></i>Portfolio <span
                                    class="b-ico-dropdown"><i
                                        class="fa fa-arrow-circle-down"></i></span></a>

                    </li>
                    <li class="b-top-nav__1level f-top-nav__1level f-primary-b" id="blog">
                        <a href="#"><i class="fa fa-code b-menu-1level-ico"></i>Blog <span
                                    class="b-ico-dropdown"><i
                                        class="fa fa-arrow-circle-down"></i></span></a>

                    </li>
                    <li class="b-top-nav__1level f-top-nav__1level f-primary-b" id="contact">
                        <a href="#"><i class="fa fa-folder-open b-menu-1level-ico"></i>Contact
                            us<span class="b-ico-dropdown"><i
                                        class="fa fa-arrow-circle-down"></i></span></a>
                    </li>

                    @if(session()->has('name'))
                        <li class="b-top-nav__1level f-top-nav__1level f-primary-b dropdown"
                            id="user_lable">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true"
                               aria-expanded="true">Welcome {{ session()->get('name') }} <span
                                        class="caret"></span><span
                                        class="b-ico-dropdown"><i
                                            class="fa fa-arrow-circle-down"></i></span></a>
                            <ul class="dropdown-menu f-primary-b text-center" style="left: 1px">
                                <li><a href="/users/{{ session()->get('id') }}" class="text-center">Personal Info</a></li>
                                <li><a href="/users/{{ session()->get('id') }}" class="text-center">Edit Info</a></li>
                                <li role="separator" class="divider"></li>
                                <li style="padding: 10px"><form action="{{ route('logout') }}" method="POST" class="text-center">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-block btn-danger text-center" type="submit" name="button">Log out</button>
                                    </form></li>
                            </ul>

                        </li>

                    @else
                        <li class="b-top-nav__1level f-top-nav__1level f-primary-b b-top-nav-big"
                            id="login">
                            <a href="/login"><i class="fa fa-cloud-login b-menu-1level-ico"></i>Login<span
                                        class="b-ico-dropdown"><i
                                            class="fa fa-arrow-circle-down"></i></span></a>

                        </li>
                        <li class="b-top-nav__1level f-top-nav__1level f-primary-b b-top-nav-big"
                            id="signup">
                            <a href="/signup"><i class="fa fa-cloud-login b-menu-1level-ico"></i>Sign
                                up<span
                                        class="b-ico-dropdown"><i
                                            class="fa fa-arrow-circle-down"></i></span></a>

                        </li>
                    @endif

                </ul>

            </nav>
        </div>
    </div>
</header>
<div class="j-menu-container"></div>