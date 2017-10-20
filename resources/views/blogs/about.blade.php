@extends('layouts.main')

@section('page_title','ABOUT')

@section('content')
<div class="container">

  <div class="row">
    
    <div class="col-md-4">
      <div class="col-md-12">
        <div class="row">
          <div class="about-card-profile">
            <p class="text-center">
              <img src="{{ url('images/me.jpg') }}" class="rounded-circle">
            </p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-md-8">
      <div class="row">
        <div class="about-card">
          <h4 class="text-center">NADTAKAN FUTHOEM</h4>           
          <h4 class="text-center">nadtakanf@gmail.com</h4>
          <hr>
          <h4>EXPERIENCE</h4>
          <hr>
          <h5>PHP Developer                 [Feb 2015 to Present]</h5>
            <p>
              AjarnAdam.TV Website
            </p>
            <p>
              <ul>
                <li>Build and maintain database system</li>
                <li>Develop admin consoles for backend member and content management system</li>
                <li>Link backend e-learning content with front end user interface</li>
              </ul>
            </p>  
          <h5>COBOL Developer (Mainframe)             [Oct 2014 to Present]</h5>
            <p>
              TMB Bank    
            </p>
            <p>
              <ul>
                <li>TMB Ready Cash Conversion; </li>
                <li>TMB Verify by Visa;</li>
                <li>TMB CLCB Enhancement for unsecured TMB Bank loans</li>
                <li>Developed system for TMB Ready Cash Conversion,TMB Verify by Visa, and TMB CLCB enhancement to support unsecured load</li>
              </ul>
            </p>
            <p>
              BAY Bank    
            </p>
            <p>
              <ul>
                <li>Acquiring migration to CardLinKv2 for BAY</li>
                <li>Developed system for BAY acquiring migration to CardLinKv2</li>
              </ul>
            </p>      
        </div>
      </div>

      <div class="row">
        <div class="about-card">
          <h4>TECHNOLOGY</h4>
          <hr>
          <p>
            <ul>
              <li>Programming/Languages : Cobol; PHP (CakePHP); Java (Spring, Hibernate,JSP, Servlets); HTML (JQuery, Ajax, Bootstrap3, Jquery Mobile</li>
              <li>Planform: IBM z/OS, IBM AIX</li>
              <li>API: FACEBOOK API</li>
              <li>Databases: MySQL, VSAM</li>
              <li>Tools: Jasper iReport, Eclipse, NetBeans, Sublime</li>
            </ul>
          </p>    
        </div>
      </div>
      
      <div class="row">
        <div class="about-card">
          <h4>EDUCATION</h4>
          <hr>
          <p>
            Bachelor’s Degree: Computer Science             [Mar 2013]
            Meajo University
            GPA: 3.10
          </p>    
          <p>
            Capstone Project
            E-learning online   
            <ul>
              <li>Organized user flow, content, and interaction</li>
              <li>Detailed the logic in documents</li>
              <li>Developed the program with  spring hibernate and MySQL</li>
            </ul>         
          </p>
        </div>
      </div>

      <div class="row">
        <div class="about-card">
          <h4>LANGUAGES</h4>
          <hr>
          <p>
            <ul>
              <li>Thai – Native skillset</li>
              <li>English – Intermediate written and spoken English skills</li>
            </ul>
          </p>  
        </div>
      </div>

    </div>
  </div>
</div>


@stop