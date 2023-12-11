<div class="sec2-tien-do-pc py-5">
    <p class="header1-sec2-tien-do mulish-extrabold">THE MINATO RESIDENCE</p>
    <p class="header2-sec2-tien-do icielbegum d-none d-md-block" style="font-size: 2.66vw">TIẾN ĐỘ</p>
    <p class="header2-sec2-tien-do icielbegum d-block d-md-none" style="font-size: 29px">TIẾN ĐỘ</p>
    <form class="row-test">
        <input class="col-md-3 col-xs-12 input-tien-do shadow-effect border-0 mulish-extrabold px-3" style="height: 3rem; font-size: 15px"
               placeholder="Nhập mã OTP" type="number" id="fullnamem" name="OTP" required ><br>
        <div class="btn btn-outline-info p-1 border-3 ms-3" style="border-color: #133351">
            <div class="btn text-white mulish-extrabold px-4" style="background-color: #133351; font-size: 15px">
                OK</div>
        </div>
    </form>
</div>
<div class="secret d-none">
    <img src="{{asset('images/tien-do/11.jpg')}}" alt="" class="w-100">
    <img src="{{asset('images/tien-do/22.jpg')}}" alt="" class="w-100">
    <img src="{{asset('images/tien-do/33.jpg')}}" alt="" class="w-100">
    <img src="{{asset('images/tien-do/44.jpg')}}" alt="" class="w-100">
    <img src="{{asset('images/tien-do/55.jpg')}}" alt="" class="w-100">
    <img src="{{asset('images/tien-do/66.jpg')}}" alt="" class="w-100">
    <img src="{{asset('images/tien-do/77.jpg')}}" alt="" class="w-100">
</div>
<style>
    .btn {
        border-radius: 0 !important;
    }

</style>
<script>
    $(document).ready(function() {
        $('.btn-outline-info').click(function() {
            checkInput();
        });

        $('.input-tien-do').keypress(function(e) {
            if (e.which === 13) {
                e.preventDefault(); // Ngăn chặn hành động mặc định của form
                checkInput();
            }
        });

        $('form.row-test').submit(function(e) {
            e.preventDefault(); // Ngăn chặn hành động mặc định của form
            checkInput();
        });

        function checkInput() {
            var userInput = $('.input-tien-do').val();
            if (userInput === '129123') {
                $('.secret').removeClass('d-none');
            } else {
                alert('Bạn đã nhập sai, vui lòng nhập lại');
            }
        }
    });
</script>
