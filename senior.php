<br/>
<div class="container"> 
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Bidang seni dan olahraga (Senior ) </li>
    </ol>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
           <p align="center"> <img src="img/senior.jpg" width="70%"> </p>
        </div>
        <div class="col-sm-3"></div>
    </div>
    <br/>
    <div class="row">
        <div class="col-sm-12">
            <div id="people"></div>

        <script type="text/javascript">
            var peopleElement = document.getElementById("people");
            var orgChart = new getOrgChart(peopleElement, {
                primaryFields: ["name", "title", "phone", "mail"],
                dataSource: [
                    { id: 1, parentId: null, name: "Wilson Marbun ", title: "Korbid"},
                    { id: 2, parentId: 1, name: "Livia Pasi"},
                    { id: 3, parentId: 1, name: "Abdi Silalahi"}
                ]
            });
        </script>
        </div>
    </div>
</div>



