@include('includes.header')

<title>Dynamically Add or Remove input fields in PHP with JQuery</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<div class="container">


    <br />
    <br />
    <h2 align="center">Dynamically Add or Remove courses</h2>

    <div class="form-group">
        <form  method="post" action="{{route('equalized-done',$id)}}">
            @csrf
            <div class="table-responsive">
                <table class="table table-bordered" id="dynamic_field">

                    <tr>
                        <td><input type="text" name="name[]" id="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>
                        <td id="htmlContent">
                            <select class="browser-default custom-select" name="courses[]" id="courses[]" style="display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;">
                                <option selected> Select equivalent course </option>
                                @foreach($courses as $course)
                                <option value="{{$course->course_code}}" > {{$course->course_code}} </option>
                                    @endforeach
                            </select>
                            <select class="browser-default custom-select" name="grade[]" id="grade[]" style="display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;">
                                <option selected> Select equivalent course </option>

                                <option value="A" > A </option>
                                <option value="B" > B </option>
                                <option value="C" > C</option>

                            </select>
                        </td>
                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                    </tr>

                </table>
                <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
            </div>
        </form>
    </div>
</div>

<script>

    //
    $(document).ready(function(){
        var i=1;
        $('')
        $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td> ' +
                '<td>'+ $('#htmlContent').html() +'</td>' +
                '<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });
        // $('#submit').click(function(){
        //     $.ajax({
        //         url:"/equalized/courses/done",
        //         method:"POST",
        //         data:$('#add_name').serialize(),
        //         success:function(data)
        //         {
        //             alert(data);
        //             $('#add_name')[0].reset();
        //         }
        //     });
        // });
    });
    //
    // $("#faculty").on('change',function(e){
    //      var faculty_id=e.target.value;
    //      $.get('/faculty/'+faculty_id,function(data){
    //          $('#courses').empty();
    //         $.each(data,function (index,courseObje) {
    //             console.log(courseObje.course_name);
    //             $("#courses").append('  <option value="'+courseObje.id+'">'+'('+courseObje.course_code+')'+courseObje.course_name+'  </option>')
    //         })
    //      });
    // });
</script>



@include('includes.footer')
