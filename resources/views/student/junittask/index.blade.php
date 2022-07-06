@extends('student/home')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Task by Each Topic</h3>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="callout callout-info">
                    <h5><i class="fas fa-info"></i> Note:</h5>
                    This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
                </div>


                <!-- Main content -->
                <div class="callout callout-success">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-md-12">
                            {{ Form::open(['method' => 'GET']) }}
                            <div class="form-group">
                                <label for="topic">Topic Lesson</label>
                                {!! Form::select('topicList', $items , $filter, ['class' => 'form-control', 'id' => 'topicList', 'onchange' => 'this.form.submit();']) !!}
                                {{ Form::close() }}
                                <!--
                                {!! Form::label('topic', 'Topic:') !!}
                                {!! Form::select('topic', $items , null, ['class' => 'form-control', 'onchange' => 'doSomething(this)']) !!}
                                -->
                            </div>
                            @php ($complete = true)

                        </div>
                        <!-- /.col -->
                    </div>

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th></th>
                                        <th>Guide Documents</th>
                                        <th>Test Files</th>
                                        <th>Supplement Files</th>
                                        <th>Other Files</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>Resource for <b>{{ $topic['name'] }}</b></td>
                                        <td class="text-center">
                                            @if($topic['guide'] !='')
                                            <div class="btn-group">
                                                <a class="btn btn-success" href="{{ URL::to('/download/guide/'.str_replace('learning/','',$topic['guide']).'/'.str_replace(' ','',$topic['name'])) }}"><i class="fa fa-download"></i>&nbsp;Download</a>
                                            </div>
                                            @else
                                            Empty
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if($topic['testfile'] !='')
                                            <div class="btn-group">
                                                <a class="btn btn-warning" href="{{ URL::to('/download/test/'.str_replace('learning/','',$topic['testfile']).'/'.str_replace(' ','',$topic['name'])) }}"><i class="fa fa-download"></i>&nbsp;Download</a>
                                            </div>
                                            @else
                                            Empty
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if($topic['supplement'] !='')
                                            <div class="btn-group">
                                                <a class="btn btn-primary" href="{{ URL::to('/download/supp/'.str_replace('learning/','',$topic['supplement']).'/'.str_replace(' ','',$topic['name'])) }}"><i class="fa fa-download"></i>&nbsp;Download</a>
                                            </div>
                                            @else
                                            Empty
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if($topic['other'] !='')
                                            <div class="btn-group">
                                                <a class="btn btn-info" href="{{ URL::to('/download/other/'.str_replace('learning/','',$topic['other']).'/'.str_replace(' ','',$topic['name'])) }}"><i class="fa fa-download"></i>&nbsp;Download</a>
                                            </div>
                                            @else
                                            Empty
                                            @endif
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-md-12">
                            <label for="topic">Description</label>
                            <div class="form-group">
                                <!-- <label for="description">Description</label> -->
                                <textarea id="desc" class="form-control" disabled rows="2">{{ $topic['desc'] }}</textarea>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-md-12">

                            <label for="topic">Submit your Java file</label>

                            <div class="form-group">
                                {{ Form::file('image', ['class'=>'form-control']) }}
                            </div>

                            <!-- <script type="text/javascript">
                                var request = require('request');

                                var program = {
                                    script: "public class MyClass {public static void main(String args[]) {int x=10;int y=25;int z=x+y;System.out.println(\"'Sum of x+y = \" + z);}}",
                                    language: "java",
                                    versionIndex: "0",
                                    clientId: "b7a98291b80d5f63ac2b0bafde75a13e",
                                    clientSecret: "fc7767e12bfdb8e330721ae20cb956c7e72c7dd2bace9304373b39217afe1ed7"
                                };
                                request({
                                        url: 'https://api.jdoodle.com/v1/execute',
                                        method: "POST",
                                        json: program
                                    },
                                    function(error, response, body, output) {
                                        console.log('output', output);
                                        console.log('error:', error);
                                        console.log('statusCode:', response && response.statusCode);
                                        console.log('body:', body);
                                    });
                            </script> -->
                            <!-- 
                            <div><iframe id="content"></iframe> </div -->

                            <div class="col-md-12 ">
                                <!-- <div data-pym-src="https://www.jdoodle.com/embed/v0/4TAb"></div> -->
                            </div>
                            <div class="col-lg-12 ">

                                <p color="red">
                                </p>





                                <div class="container">
                                    <hr>
                                </div>
                            </div>
                        </div>



                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.invoice -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="callout callout-danger">
                    <h5><i class="fas fa-info"></i> JUnit Result</h5>
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>System</th>
                                        <th style="width: 10px margin:fit-content">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Upload Java file</td>
                                        <td><span class="badge bg-success">Success</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php $outjava = shell_exec('java -version ' . ' 2>&1');
                                            echo '<pre>' . $outjava . '</pre>';
                                            ?>
                                        <td>
                                        <td></td>

                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>JUnit Testing</td>
                                        <td>
                                        <span class="badge bg-warning">Failed
                                            

                                        </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <?php
                                        $javashout1 = shell_exec("cd datajava && java -cp junit-4.12.jar;hamcrest-core-1.3.jar;. org.junit.runner.JUnitCore JUnitHelloWorldTest");
                                        echo '<pre>' . $javashout1 . '</pre>';

                                        $string = "There was 1 failure:";
                                                if(strpos($string, $javashout1) === FALSE) {
                                                    // javashout1 is not found in string
                                                    echo 'success';
                                                }
                                                
                                                if (strpos($string, $javashout1) !== FALSE) {
                                                    // javashout1 is found in string
                                                    echo 'failed';
                                                }
                                        ?>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>


                </div>
            </div>
        </div>

    </div><!-- /.container-fluid -->
</section>

<!-- <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script> -->





@endsection