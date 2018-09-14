<aside class="menu app-sidebar" id="app-sidebar">
  <p class="menu-label">
    عامة
  </p> 
  <ul class="menu-list">
    <li>
      <a href="{{route('dashboard')}}" class="{{Nav::isRoute('dashboard')}}" aria-expanded="false" id="link">
        اللوحة الرئيسية
        <span class="icon is-small is-pulled-left">
          <i class="fa fa-tachometer"></i>
        </span>
      </a> <!---->
    </li>
    
    <li>
      <a aria-expanded="true" @click="isOpen = !isOpen">
        <span class="icon is-small is-angle">
          <i class="fa fa-angle-down"></i>
        </span>
        الادارة العامة
        <span class="icon is-small is-pulled-left">
          <i class="fa fa-tasks"></i>
        </span>
      </a> 
      <b-collapse class="panel" :open.sync="isOpen">
        <ul>
          <li>
            <a href="{{route('users.index')}}" class="{{Nav::isResource('users')}}">
                المستخدمين
                <span class="icon is-small is-pulled-left">
                  <i class="fa fa-users"></i>
                </span>
            </a>
          </li>
          <li>
            <a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">
              الادوار
              <span class="icon is-small is-pulled-left">
                <i class="fa fa-user-secret"></i>
              </span>
            </a>
          </li>
          <li>
            <a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">
              الصلاحيات
              <span class="icon is-small is-pulled-left">
                <i class="fa fa-key"></i>
              </span>
            </a>
          </li>
          <li>
            <a href="{{route('departments.index')}}" class="{{Nav::isResource('departments')}}">
                الاقسام
                <span class="icon is-small is-pulled-left">
                  <i class="fa fa-bed"></i>
                </span>
            </a>
          </li>
          <li>
            <a href="{{route('branches.index')}}" class="{{Nav::isResource('branches')}}">
                الفروع
                <span class="icon is-small is-pulled-left">
                  <i class="fa fa-building"></i>
                </span>
            </a>
          </li>
          <li>
            <a href="{{route('locations.index')}}" class="{{Nav::isResource('locations')}}">
                المواقع
                <span class="icon is-small is-pulled-left">
                  <i class="fa fa-location-arrow"></i>
                </span>
            </a>
          </li>
        </ul>
    </b-collapse>
    </li>
    <li>
        <a aria-expanded="true" @click="isOpened = !isOpened">
          <span class="icon is-small is-angle">
            <i class="fa fa-angle-down"></i>
          </span>
          الادارة القسم
          <span class="icon is-small is-pulled-left">
            <i class="fa fa-tasks"></i>
          </span>
        </a> 
        <b-collapse class="panel" :open.sync="isOpened">
          <ul>
            <li>
              <a href="#" class="">
                  الزبائن
                  <span class="icon is-small is-pulled-left">
                    <i class="fa fa-users"></i>
                  </span>
              </a>
            </li>

          </ul>
      </b-collapse>
    </li>
  </ul>
</aside>