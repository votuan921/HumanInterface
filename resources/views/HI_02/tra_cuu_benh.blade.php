@extends('HI_03.layouts.master')

@section('SPECIFIC CSS')
    <link href="{{ asset('HI_02/css/app.css') }}" rel="stylesheet">
@endsection

@section('content')
    <main>
        <div class="disease-search header-video">
            <div class="search-box content text-center">
                <h3>Nhập vào triệu chứng bệnh</h3>
                <br>
                <form>
                    <div id="custom-search-input">
                        <div class="input-group">
                            <input type="text" name="symptom" class=" search-query" id="symptomInp"
                                   placeholder="Đau đầu, chóng mặt ...."
                                   value="{{ app('request')->input('symptom') ?: '' }}"
                            >
                        </div>
                    </div>
                </form>
            </div>
            <div class="result container" style="display: none">
                <div class="result-list row">
                    <div class="col-lg-12 col-md-12">
                        <a href="{{ url('bai-viet') }}" class="box_cat_home">
                            <h3 class="text-left">Chứng <strong class="text-blue">đau đầu</strong> và Đau nửa đầu mãn tính</h3>
                            <p class="text-left">
                                Chứng <strong class="text-blue">đau đầu</strong> biểu hiện bằng những triệu chứng rõ ràng và chính xác, có thể gây mờ mắt và cơn đau nhói, tình trạng này có thể kéo dài vài phút cho đến vài ngày. Chứng đau đầu chia thành ba loại:  đau căng đầu, đau nửa đầu và đau đầu từng cơn. Mỗi loại có các nguyên nhân khởi phát riêng và triệu chứng khác nhau. Chứng đau nửa đầu khác với đau căng đầu vì cơn đau chỉ giới hạn ở một bên đầu và có thể được mô tả như một cơn đau nhói mức độ trung bình đến nặng.
                            </p>
                            <div class="text-right">
                                <button type="button" class="btn">Xem thêm</button>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <a href="{{ url('bai-viet') }}" class="box_cat_home">
                            <h3 class="text-left"><strong class="text-blue">Đau đầu</strong> do mất ngủ</h3>
                            <p class="text-left">
                                Các bác sĩ thường gặp khá nhiều than phiền của người bệnh về triệu chứng <strong class="text-blue">đau đầu</strong> kèm theo nhức mắt. Vậy nguyên nhân của căn bệnh này là do đâu, có thể loại bỏ bằng cách nào?
                            </p>
                            <div class="text-right">
                                <button type="button" class="btn">Xem thêm</button>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <a href="{{ url('bai-viet') }}" class="box_cat_home">
                            <h3 class="text-left">Cao huyết áp: Triệu chứng, nguyên nhân và cách điều trị</h3>
                            <p class="text-left">
                                ...Đa phần các triệu chứng của cao huyết áp đều khá mờ nhạt. Trên thực tế, hầu hết các bệnh nhân tăng huyết áp đều không thể nhận thấy bất kỳ một dấu hiệu hoặc triệu chứng rõ ràng nào, mặc dù bệnh đã tiến triển khá nghiêm trọng. Một số ít bệnh nhân bị tăng huyết áp có thể biểu hiện một số triệu chứng thoáng qua như <strong class="text-blue">đau đầu</strong>, <strong class="text-blue">khó thở</strong>, hoặc hiếm hơn là chảy máu cam.
                            </p>
                            <div class="text-right">
                                <button type="button" class="btn">Xem thêm</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('SPECIFIC SCRIPTS')
    <script>
        $(document).ready(function() {
            $('#symptomInp').on('keyup', function() {
                $('.result').show('fade');
            });
        });
    </script>
@endsection
