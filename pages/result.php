<?php 
    
// gets value sent over search form
$query = $_POST["query"];

?>
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
        <div class="page-title">	
            <h3><?php echo $query; ?></h3>
        </div>
        <div id="container">
            <div class="row-fluid spacing-bottom 2col">	
                <div class="span3 ">	
                    <div class="tiles blue added-margin">
                        <div class="tiles-body">
                            <div class="controller">								
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>		
                            </div>		
                            <div class="tiles-title">
                                Datensätze in DB
                            </div>	
                            <div class="heading">
                                <span class="animate-number" data-value="26.8" data-animation-duration="1200">0</span>%

                            </div>
                            <div class="progress transparent progress-white progress-small no-radius">
                                <div class="bar animate-progress-bar" data-percentage="26.8%"></div>
                            </div>					
                            <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; 4% higher <span class="blend">than last month</span></span></div>
                        </div>	
                    </div>
                </div>
                <div class="span3 ">
                    <div class="tiles green added-margin">
                        <div class="tiles-body">
                            <div class="controller">								
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>									
                            </div>		
                            <div class="tiles-title">
                                Länder in DB
                            </div>	
                            <div class="heading">
                                <span class="animate-number" data-value="2545665" data-animation-duration="1000">0</span>	
                            </div>
                            <div class="progress transparent progress-white progress-small no-radius">
                                <div class="bar animate-progress-bar" data-percentage="79%"></div>
                            </div>				
                            <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; 2% higher <span class="blend">than last month</span></span></div>	
                        </div>
                    </div>
                </div>
                <div class="span3 ">
                    <div class="tiles red added-margin">
                        <div class="tiles-body">
                            <div class="controller">								
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>										
                            </div>	
                            <div class="tiles-title">
                                Einträge in DB
                            </div>	
                            <div class="heading">
                                <span class="animate-number" data-value="14500" data-animation-duration="1200">0</span>	
                            </div>
                            <div class="progress transparent progress-white progress-small no-radius">
                                <div class="bar animate-progress-bar" data-percentage="45%"></div>
                            </div>
                            <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; 5% higher <span class="blend">than last month</span></span></div>	
                        </div>
                    </div>

                </div> 
                <div class="span3">
                    <div class="tiles purple added-margin">
                        <div class="tiles-body">
                            <div class="controller">								
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>									
                            </div>		
                            <div class="tiles-title">
                                Durchschnittl. Hits pro Begriff
                            </div>	
                            <div class="row-fluid">
                                <div class="heading">
                                    <span class="animate-number" data-value="1600" data-animation-duration="700">0</span>	
                                </div>
                                <div class="progress transparent progress-white progress-small no-radius">
                                    <div class="bar animate-progress-bar" data-percentage="12%"></div>
                                </div>
                            </div>
                            <div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; 3% higher <span class="blend">than last month</span></span></div>

                        </div>
                    </div>
                </div>			
            </div>  
            <div class="row-fluid spacing-bottom">		
                <div class="span8">
                    <div class="row-fluid spacing-bottom">
                        <div class="span12 tiles white ">
                            <div class="no-margin-grid">
                                <div class="row-fluid">	
                                    <div class="tile-more-content span4">
                                        <div class="tiles green">
                                            <div class="tiles-body">
                                                <div class="heading">
                                                    Statistical 
                                                </div>	
                                                <p>Status : live</p>					
                                            </div>
                                            <div class="tile-footer">
                                                <div class="iconplaceholder"><i class="icon-map-marker"></i></div>258 Countries, 4835 Cities
                                            </div>
                                        </div>
                                        <div class="tiles-body">
                                            <ul class="progress-list">
                                                <li>
                                                    <div class="details-wrapper">
                                                        <div class="name">Foreign Visits</div>
                                                        <div class="description">Our Overseas visits</div>
                                                    </div>
                                                    <div class="details-status pull-right">
                                                        <span class="animate-number" data-value="89" data-animation-duration="800">0</span>%
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="progress progress-small no-radius progress-success">
                                                        <div class="bar animate-progress-bar" data-percentage="89%"></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="details-wrapper">
                                                        <div class="name">Local Visits</div>
                                                        <div class="description">Our Overseas visits</div>
                                                    </div>
                                                    <div class="details-status pull-right">
                                                        <span class="animate-number" data-value="45" data-animation-duration="600">0</span>%
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="progress progress-small no-radius progress-warning">
                                                        <div class="bar animate-progress-bar" data-percentage="45%"></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="details-wrapper">
                                                        <div class="name">Other Visits</div>
                                                        <div class="description">Our Overseas visits</div>
                                                    </div>
                                                    <div class="details-status pull-right">
                                                        <span class="animate-number" data-value="12" data-animation-duration="200">0</span>%
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="progress progress-small no-radius progress-danger">
                                                        <div class="bar animate-progress-bar" data-percentage="12%"></div>
                                                    </div>
                                                </li>					
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="tiles white span8">
                                        <div class="tiles-chart">	
                                            <div class="controller">								
                                                <a href="javascript:;" class="reload"></a>
                                                <a href="javascript:;" class="remove"></a>									
                                            </div>								  
                                            <div class="tiles-body">									
                                                <div class="tiles-title">GEO-LOCATIONS</div>
                                                <div class="heading">
                                                    8,545,654 <i class="icon-map-marker"></i>
                                                </div>	
                                            </div>		
                                            <div id="world-map" style="height:405px"></div>													
                                        </div>						
                                        <div class="clearfix"></div>	
                                    </div>		
                                </div>
                            </div>
                        </div>
                    </div>				
                    <div class="row-fluid spacing-bottom">
                        <div class="span12 tiles grey ">
                            <div class="no-margin-grid">
                                <div class="row-fluid">	
                                    <div class="tiles white span8">																	  
                                        <div class="tiles-body">									
                                            <div class="no-margin-grid">
                                                <div class="row-fluid">
                                                    <div class="span6">
                                                        <div class="mini-chart-wrapper">
                                                            <div class="chart-details-wrapper">
                                                                <div class="chartname">
                                                                    New Orders
                                                                </div>
                                                                <div class="chart-value">
                                                                    17,555
                                                                </div>													
                                                            </div>
                                                            <div class="mini-chart">
                                                                <div id="mini-chart-orders"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="span6">
                                                        <div class="mini-chart-wrapper">
                                                            <div class="chart-details-wrapper">
                                                                <div class="chartname">
                                                                    My Balance
                                                                </div>
                                                                <div class="chart-value">
                                                                    $17,555
                                                                </div>													
                                                            </div>
                                                            <div class="mini-chart">
                                                                <div id="mini-chart-other"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>	
                                            </div>	

                                        </div>	
                                        <br />
                                        <div id="ricksaw"></div>									

                                        <div class="clearfix"></div>	
                                    </div>	
                                    <div class="span4">
                                        <div class="tiles grey ">
                                            <div class="tiles white no-margin">
                                                <div class="tiles-body">
                                                    <div class="tiles-title blend">
                                                        OVERALL VIEWS		
                                                    </div>
                                                    <div class="heading">
                                                        <span data-animation-duration="1000" data-value="432852" class="animate-number">0</span>	
                                                    </div>	
                                                    44% higher <span class="blend">than last month</span>	
                                                </div>
                                            </div>						
                                            <div id="legend"></div>


                                        </div>	
                                    </div>							 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="span4">
                    <div class="row-fluid spacing-bottom ">
                        <div class="span12">				
                            <div class="tiles white added-margin">
                                <div class="tiles-body">
                                    <div class="controller">								
                                        <a href="javascript:;" class="reload"></a>
                                        <a href="javascript:;" class="remove"></a>									
                                    </div>
                                    <div class="tiles-title">
                                        SERVER LOAD
                                    </div>	
                                    <div class="heading text-black ">
                                        250 GB
                                    </div>	
                                    <div class="progress  progress-small no-radius progress-success">
                                        <div class="bar animate-progress-bar" data-percentage="25%"></div>
                                    </div>
                                    <div class="description">
                                        <span class="mini-description"><span class="text-black">250GB</span> of <span class="text-black">1,024GB</span> used</span>								
                                    </div>
                                </div>
                            </div>
                            <div class="tiles white added-margin">
                                <div id="chart">								
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>		

            </div>
        </div> 
    </div>  
    <!-- END PAGE --> 
</div>
<!-- END CONTAINER --> 