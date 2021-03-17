 <script type="text/javascript" src="https://healthengine.com.au/info/wp-content/plugins/vmc-tools/lib/../jscripts/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="https://healthengine.com.au/info/wp-content/plugins/vmc-tools/lib/../jscripts/jquery-ui-1.8.16.custom.min.js"></script>
<link type="text/css" href="https://healthengine.com.au/info/wp-content/plugins/vmc-tools/lib/../jscripts/jquery-ui-1.8.16.custom.css" rel="stylesheet" />  
<script type="text/javascript">
$(function(){

    // Datepicker
    $("#datepicker").datepicker({
        
    });
    
    
    // Datepicker
    $("#datepicker2").datepicker({
       
        dateFormat: "D, d M yy"
    });
    
    $("#datetwo").hide();
    $("#datemen").hide();
    $(".resetbutton").hide();

    
 
    
    $("#datepicker").change(function() {
        var numberOfDaysToAdd = parseInt($("#menstrualdays").val());
        var daystoaddtext = "+" + numberOfDaysToAdd + "d";
        var date2 = $("#datepicker").datepicker("getDate", daystoaddtext); 
        date2.setDate(date2.getDate()+numberOfDaysToAdd);
        $("#datepicker2").datepicker("setDate", date2);
        $("#datetwo").show();
        $("#datemen").text("Your Next Menstrual Date: " + $("#datepicker2").val());
        $("#datemen").show();
        $(".resetbutton").show();
    });
    
    
    $(".resetbutton").click(function() {
        $("#datetwo").hide();
        $("#datemen").hide();
        $(".resetbutton").hide();
    });
    $(".Logoutbutton").click(function() {
        location. replace("logout2.php") 


    }); 

});
</script>
<style type="text/css">

body{
   
    background:url(v.jpg) no-repeat;
 
}

#datemen {
    font-size:25px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color:black;
    margin-left:20%;
    
    padding: 10px;
    color:#222222; 
    
}
#datetwo{
    font-size:18px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color:black;
    margin-top:6%;
    
    padding: 10px;
}

.actiontitle {
    font-size:30px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
    color:black;
   
    
}
.action{
    font-size:30px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
    color:black;
    text-decoration:underline;
    
    
    
}
.title{
    font-size:30px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
    color:black;
}

#menstrualdays {
font-size:18px;
width: 50px;
height: 26px;

}

.ui-datepicker { 
    width: 20em; 
    padding: .4em .4em 0; 
    display: none; 
    
}

.smalltext {
    font-size:9px;
    
}

.resetbutton {
    font-size:20px;
 float: left;
 margin:10px;
 background-color: #cccccc;
 border:9px outset #cccccc;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
    color:#222222;
    font-weight:bold;
}

#datepicker{
    
    margin-top:10%;
    margin-left:10%;
}
#datepicker2{
    margin-top:20%;
}
.Logoutbutton{
    font-size:20px;
    color:#222222;
    float:right;
    background-color: #cccccc;
    border:9px outset #cccccc;
    font-weight:bold;
margin-right:-30%;
font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
}
.logoutbutton:hover
{
    background-color:#c0c0c0;
    border-color: #c0c0c0;
}
.resetbutton:hover
{
    background-color:#c0c0c0;
    border-color: #c0c0c0;
}




-->
</style>

 
    <table id="tblmenstralcalc1">
      <tr>
        <td colspan="2">
        <h1 class="action">Calculator : Find Your Next Date </h1>
            
        </td>
      </tr>
    <tr>
        <td colspan="2">
             <b class="actiontitle"> Select your menstrual cycle length: </b>
             <select name="menstrualdays" id="menstrualdays">
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
              <option>26</option>
              <option>27</option>
              <option selected="selected">28</option>
              <option>29</option>
              <option>30</option>
              <option>31</option>
              <option>32</option>
              <option>33</option>
              <option>34</option>
              <option>35</option>
              <option>36</option>
              <option>37</option>
              <option>38</option>
              <option>39</option>
              <option>40</option>
              <option>41</option>
              <option>42</option>
              <option>43</option>
              <option>44</option>
              <option>45</option>
             </select>  <b class="title">days </b>
        </td>
      </tr>
      <tr>
        <td>
            <div id="dateone">
                <b class="actiontitle"> Select your last Menstrual Date:</b>
                <div id="datepicker"></div>
            </div>
        </td>
        <td>
            <div id="datetwo">
                <h2>Next Menstrual Date:</h2>
                <div id="datepicker2"></div>
            </div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
            <div id="datemen"></div>
             
             <input type="button" value="Reset" class="resetbutton" />
             
             <input type="button" value="Log Out" class="Logoutbutton" />
            
             
           
        </td>
      </tr>
    </table>
