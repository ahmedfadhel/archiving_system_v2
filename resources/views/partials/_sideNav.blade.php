<aside class="menu app-sidebar" id="app-sidebar">
  <p class="menu-label">
    عامة
  </p> 
  <ul class="menu-list">
    <li>
      <a href="#" class="is-active" aria-expanded="false">
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
            <a href="#" class="">
                المستخدمين
                <span class="icon is-small is-pulled-left">
                  <i class="fa fa-users"></i>
                </span>
            </a>
          </li>
          <li>
            <a href="#" class="">
              الادوار
              <span class="icon is-small is-pulled-left">
                <i class="fa fa-user-secret"></i>
              </span>
            </a>
          </li>
          <li>
            <a href="#" class="">
              الصلاحيات
              <span class="icon is-small is-pulled-left">
                <i class="fa fa-key"></i>
              </span>
            </a>
          </li>
          <li>
            <a href="#" class="">
                الاقسام
                <span class="icon is-small is-pulled-left">
                  <i class="fa fa-bed"></i>
                </span>
            </a>
          </li>
          <li>
              <a href="#" class="">
                  الفروع
                  <span class="icon is-small is-pulled-left">
                    <i class="fa fa-building"></i>
                  </span>
              </a>
            </li>
        </ul>
    </b-collapse>
    </li>
  </ul>
</aside>

@section('scripts')
    <script>
      const appSideBar = new Vue({
        el: "#app-sidebar",
        data:{
          isOpen:true
        }
      })
    </script>
@endsection