@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 mt-5">
        <h1 class="text-center">Admin Panel</h1>
     </div>

    <div class="admin-navi">
      <ul>
      <li class="admin-navi-li"><a href=" {{ route('adminHomepage') }} "><i class="fa fa-home" aria-hidden="true"></i><span class="ml-2 text-white">Главна страница</span></a></li>
      <li class="admin-navi-li"><a href=" {{ route('adminMenu') }}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="ml-2 text-white">Меню</span></a></li>
          <li class="admin-navi-li"><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="ml-2 text-white">Поръчки</span></a></li>
          <li class="admin-navi-li"><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="ml-2 text-white">Новини</span></a></li>
          <li class="admin-navi-li"><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="ml-2 text-white">Настройки</span></a></li>
      </ul>
    </div>

    @yield('adminContent')
    
</div>
@endsection


