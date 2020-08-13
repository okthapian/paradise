<br/>
<div class="container"> 
	<ol class="breadcrumb">
	    <li class="breadcrumb-item">
	        <a href="index.html">Home</a>
	    </li>
        <li class="breadcrumb-item active">Bidang Humas dan Pemerhati dan Harmonisasi(humper)</li>
    </ol>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <img src="img/humper.jpg" width="100%">
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
                    { id: 2, parentId: 1, name: "Agatha"},
                    { id: 3, parentId: 1, name: "Adriani br Sembiring"},
                    { id: 4, parentId: 1, name: "Bernandus "},
                     { id: 5, parentId: 1, name: "Nadia Damanik"},
                    { id: 6, parentId: 1, name: "Santa Julia"}
                ]
            });
        </script>
        </div>
    </div>
</div>



