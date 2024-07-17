<!-- for Scrolling Notice Board-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$(function () {
  var tickerLength = $(".container ul li").length;
  var tickerHeight = $(".container ul li").outerHeight();
  $(".container ul li:last-child").prependTo(".container ul");
  $(".container ul").css("marginTop", -tickerHeight);
  function moveTop() {
    $(".container ul").animate(
      {
        top: -tickerHeight
      },
      600,
      function () {
        $(".container ul li:first-child").appendTo(".container ul");
        $(".container ul").css("top", "");
      }
    );
  }
  setInterval(function () {
    moveTop();
  }, 3000);
});


</script>
<style>
.container {
  width: 100%;
  height: 650px;
  overflow: hidden;
  padding-top:-50px;
}
ul.notice {
  list-style: none;
  position: relative;
}
li.notice {
  height: 80px;
  background-color: rgba(153, 11, 11,0.9);
  text-align: center;
  border-bottom: 1px solid #333;
}
h2.notice {
  color: #fff;
  padding-top: 10px;
  font-size:15px;
}
p.notice {
  text-align: left;
  padding: 10px;
  color: #eee;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

</style>
<div class="container">
  <ul class="notice">
    <li class="notice">
      <h2 class="notice">Head line 1</h2>
      <p class="notice">News detail just a line jhghdsbd hsdssdhjhdjshdjsahdjs</p>
    </li>
    <li class="notice">
      <h2 class="notice">Head line 2</h2>
      <p class="notice">News detail just a line jhghdsbd hsdssdhjhdjshdjsahdjs</p>
    </li>
    <li class="notice">
      <h2 class="notice">Head line 3</h2>
      <p class="notice">News detail just a line jhghdsbd hsdssdhjhdjshdjsahdjs</p>
    </li>
    <li class="notice">
      <h2 class="notice">Head line 4</h2>
      <p class="notice">News detail just a line jhghdsbd hsdssdhjhdjshdjsahdjs</p>
    </li>
    <li class="notice">
      <h2 class="notice">Head line 5</h2>
      <p class="notice">News detail just a line jhghdsbd hsdssdhjhdjshdjsahdjs</p>
    </li>
    <li class="notice">
      <h2 class="notice">Head line 6</h2>
      <p class="notice">News detail just a line jhghdsbd hsdssdhjhdjshdjsahdjs</p>
    </li>
    <li class="notice">
      <h2 class="notice">Head line 7</h2>
      <p class="notice">News detail just a line jhghdsbd hsdssdhjhdjshdjsahdjs</p>
    </li>
    <li class="notice">
      <h2 class="notice">Head line 8</h2>
      <p class="notice">News detail just a line jhghdsbd hsdssdhjhdjshdjsahdjs</p>
    </li>

  </ul>
</div>

<!--Notice Board End-->