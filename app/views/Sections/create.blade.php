@extends('layouts/main')
@section('content')
		
		<ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{URL::to('sections')}}"> Sections</a></li>
          <li class="breadcrumb-item"><a href="{{URL::to('sections/create')}}"> New Section</a></li>
         
         
         
          <!-- Breadcrumb Menu-->
          
          
        </ol>

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">

        		<div class="col-lg-5 col-xs-12">
        		
        		
                    <div class="car">
                        <div class="card-bod">
                            


                             <form action="{{URL::to('sections')}}" method="post" class="form-horizontal">

        <div class="card-bod ">

            <div class="form-group row ">
              <div class="col-sm-12 ">
                
                <input type="text" name="name" class="form-control" placeholder="Section Name">
              </div>
            </div>
           
            <div class="form-group row ">
              <div class="col-sm-12 ">
                
                <textarea class="form-control" name="description">Section description...</textarea>
              </div>
            </div>


            <div class="form-group row ">
              <div class="col-sm-12 ">
                
                <select class="form-control" name="section_ref">
                  <option value="personal">Personal</option>
                  <option value="summary">Summary</option>
                  <option value="work">Work</option>
                  <option value="education">Education</option>
                  <option value="skill">Skill</option>
                  <option value="reference">Reference</option>
                  <!--
                  <option value="award">Award</option>
                  <option value="publication">Publication</option>
                  <option value="certification">Certification</option>
                  <option value="association">Association</option>
                -->
                </select>
              </div>
            </div>

           
          
           




                        </div>
                        <div class="card-foote">
                            <button type="submit" class="btn btn-primary">Create</button>

                        </form>
                        </div>
                    </div>




        	   </div>

        	</div>
        	
        	


        </div>

@stop