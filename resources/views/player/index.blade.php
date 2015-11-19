<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        {{ HTML::script('jquery/jtable/jquery.jtable.min.js')}}
        {{ HTML::script('jquery/jtable/themes/jqueryui/jtable_jqueryui.css')}}
        {{ HTML::script('jquery/jtable/themes/metro/blue/jtable.css')}}
    </head>
    <body>
        <div id="PeopleTableContainer" style="width: 600px;"></div>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#PeopleTableContainer').jtable({
                   title:'Table of people',
                   actions: {
                       listAction:'player/index',
                       createAction:'player/create',
                       updateAction:'player/edit',
                       deleteAction:'player/delete'
                   },
                   fields:{
                       PersonId:{
                           key:true,
                           create:false,
                           edit:false,
                           list:false
                       },
                       Name:{
                           title:'author Name',
                           width:'20%'
                       },
                       RecordDate:{
                           title:'Record date',
                           width:'30%',
                           type:'date',
                           create:false,
                           edit:false
                       }
                   }
                });
            });
        </script>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
