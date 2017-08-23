</div><!-- end of content div -->
<script>
$(function() {
  AOS.init();
});
</script>
    <footer>
      <div class="footer-container">
        <div class="f-link dgrey">
          <ul>
            @foreach($menus as $menu)
                <li><a href="{{$menu->permalink}}">{{$menu->title}}</a></li>
            @endforeach
          </ul>
          <img class="foot-logo" src="{{asset('/assets/images/footer_logo.svg')}}" />
        </div>
        <div class="cc dgrey">
          Copyright &copy;2017 Common Realty Group
        </div>
      </div>
    </footer>
  </body>
</html>
