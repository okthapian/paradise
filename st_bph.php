<br/>
<div class="container"> 
	<ol class="breadcrumb">
	    <li class="breadcrumb-item">
	        <a href="index.html">Home</a>
	    </li>
        <li class="breadcrumb-item active">Badan Pengurus Harian (BPH)*</li>
    </ol>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <p align="center"><img src="img/bph.jpg" width="60%"></p>
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
                    { id: 1, parentId: null, name: "Jeffry Siburian ", title: "Ketua"},
                    { id: 2, parentId: 1, name: "Arco Ujung", title: "Wakil Ketua"},
                    { id: 3, parentId: 1, name: "Okta Limbong", title: "Sekertaris"},
                    { id: 4, parentId: 1, name: "Gihanna Damanik", title: "Bendahara"}
                ]
            });
        </script>
        </div>
    </div>
</div>



