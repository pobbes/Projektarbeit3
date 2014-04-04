  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">
      <ul class="breadcrumb">
        <li>
          <p>YOU ARE HERE</p>
        </li>
        <i class="icon-angle-right"></i>
        <li><a href="#" class="active">Simple Grids</a></li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Charts</h3>
      </div>
      <div class="row-fluid">
        <div class="span5">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Flot <span class="semi-bold">Charts</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row-fluid">
                <h3>Flot <span class="semi-bold">Charts</span></h3>
                <p>Flot is a pure JavaScript plotting library for jQuery, with a focus on simple usage, attractive looks and interactive features.</p>
                <br />
                <div id="placeholder" class="demo-placeholder" style="width:100%;height:250px;"></div>
                <div class="row-fluid">
                  <div class="span6">
                    <div class="mini-chart-wrapper">
                      <div class="chart-details-wrapper">
                        <div class="chartname"> New Orders </div>
                        <div class="chart-value"> 17,555 </div>
                      </div>
                      <div class="mini-chart">
                        <div id="mini-chart-orders"></div>
                      </div>
                    </div>
                  </div>
                  <div class="span6">
                    <div class="mini-chart-wrapper">
                      <div class="chart-details-wrapper">
                        <div class="chartname"> My Balance </div>
                        <div class="chart-value"> $17,555 </div>
                      </div>
                      <div class="mini-chart">
                        <div id="mini-chart-other"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="span7">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Sparkline <span class="semi-bold">Charts</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row-fluid">
                <h3>Sparkline <span class="semi-bold">Charts</span></h3>
                <p>The plugin is compatible with most modern browsers and has been tested with Firefox 2+, Safari 3+, Opera 9, Google Chrome and Internet Explorer 6, 7, 8, 9 & 10 as well as iOS and Android. </p>
              </div>
            </div>
            <div class="tiles white no-margin"> <br />
              <br />
              <br />
              <span id="mysparkline"></span> </div>
          </div>
        </div>
      </div>
      <div class="row-fluid">
        <div class="span7">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Sparkline <span class="semi-bold">Charts</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row-fluid">
                <h3>More <span class="semi-bold">Options</span></h3>
				<p>Sparkline line charts using <code>HTML</code> attributes. This method allows for all options </p>
              </div>
            </div>
            <div class="tiles white no-margin"> 
			 <span id="spark-2"></span>

			</div>
          </div>
        </div>
        <div class="span5">
          <div class="tiles white no-margin">
            <div class="tiles-body">
              <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
              <div class="tiles-title"> SERVER LOAD </div>
              <div class="heading text-black "> 250 GB </div>
              <div class="progress  progress-small no-radius progress-success">
                <div class="bar animate-progress-bar" data-percentage="25%"></div>
              </div>
              <div class="description"> <span class="mini-description"><span class="text-black">250GB</span> of <span class="text-black">1,024GB</span> used</span> </div>
            </div>
          </div>
          <div class="tiles white no-margin">
            <div id="updatingChart"> </div>
          </div>
        </div>
      </div>
      <br />
      <div class="row-fluid">
        <div class="grid simple">
          <div class="grid-title no-border">
            <h4>Morris <span class="semi-bold">Charts</span></h4>
            <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
          </div>
          <div class="grid-body no-border">
            <div class="row-fluid">
              <div class="span6">
                <h4>Morris <span class="semi-bold">Line Charts</span></h4>
                <p> Line graphs are probably the most widely used graph for showing trends.
                  Chart.js has a ton of customisation features for line graphs, along with support for multiple datasets to be plotted on one chart. </p>
                <div id="line-example"> </div>
              </div>
              <div class="span6">
                <h4>Morris <span class="semi-bold">Area Charts</span></h4>
                <p> Line graphs are probably the most widely used graph for showing trends.
                  Chart.js has a ton of customisation features for line graphs, along with support for multiple datasets to be plotted on one chart. </p>
                <div id="area-example"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  <div class="row-fluid">
		<div class="span6">
			<div class="grid simple">
			  <div class="grid-title no-border">
				<h4>Bar <span class="semi-bold">Charts</span></h4>
				<div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
			  </div>
			  <div class="grid-body no-border">
				<div class="row-fluid">		
				<h4>Ordered Bar <span class="semi-bold"> Charts</span></h4>
				<p>Bar charts are powered by flot plugin, here is ordered stack bar chart with a legend in it. Everything in this chart is customizable</p>
				<br />
					<div id="placeholder-bar-chart" style="height:250px"></div>
					
				</div>
			 </div>
		   </div>
		</div>
		<div class="span6">
			<div class="grid simple">
			  <div class="grid-title no-border">
				<h4>Bar <span class="semi-bold">Charts</span></h4>
				<div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
			  </div>
			  <div class="grid-body no-border">
				<div class="row-fluid">	
				<h4>Stacked Bar <span class="semi-bold"> Charts</span></h4>
				<p>Stacked bar chart is also powerd by the same plugin jquery flot. This is version where it is stacked on top of each other.</p>
				<br />				
				<div id="stacked-ordered-chart" style="height:250px"></div>

				</div>
			 </div>
		   </div>			
		</div>		
	  </div>
      <div class="row-fluid">
        <div class="span4">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Morris <span class="semi-bold">Charts</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row-fluid">
                <h4>Morris <span class="semi-bold">Donut Charts</span></h4>
                <p>Similar to pie charts, doughnut charts are great for showing proportional data.Chart.js offers the same customisation options as for pie charts, but with a custom sized inner cutout to turn your pies into doughnuts. </p>
                <div id="donut-example" style="height:200px;"> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="span4">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Pie <span class="semi-bold">Charts</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
			  <div class="row-fluid"> 
				 <h4>Sparkline <span class="semi-bold">Pie Charts</span></h4>
                <p>These charts are highly customizable, very easy to implement, scale to the resolution of the display of the client to provide sharp charts even on retina displays, and use requestAnimationFrame for smooth animations on modern devices.</p>
				<br />
				<div id="sparkline-pie" class="span12"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="span4">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Morris <span class="semi-bold">Charts</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">            
			   <div class="row-fluid">
                <h4>Easy <span class="semi-bold">Pie Charts</span></h4>
                <p>These charts are highly customizable, very easy to implement, scale to the resolution of the display of the client to provide sharp charts even on retina displays, and use requestAnimationFrame for smooth animations on modern devices.</p>
				<br />
			   <div class="pull-left">
                  <div id="ram-usage" class="easy-pie-custom" data-percent="85"><span class="easy-pie-percent">85</span></div>
                </div>
                <div class="pull-right">
                  <div id="disk-usage" class="easy-pie-custom" data-percent="73"><span class="easy-pie-percent">73</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- END PAGE -->