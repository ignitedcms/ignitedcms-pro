<?php 

   /**
    *  @Description: The default view template for pages, products and users
    *       @Params: 
    *
    *  	 @returns: 
    */

 ?>

 <div class="pmf-container" style="margin-left:auto; margin-right:auto; margin-top:30px;  min-height:800px; ">

 	 <div class="row" style="margin-left:30px; margin-right:30px;">
 	    <div class="col-sm-12">
 	        <?php if($this->session->flashdata('msg')) {?>
 	                    
 	            <?php if($this->session->flashdata('type') =='0') { ?>
 	        
 	            <div class="alert alert-danger">
 	        
 	            <?php } else {?>
 	            <div class="alert alert-success">
 	                <?php } ?>
 	                <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i>
 	                </button> <i class="fa fa-ban-circle"></i>
 	                <?php echo $this->session->flashdata('msg');?>
 	            </div>
 	        <?php } ?>
 	    </div>
 	    
 	 </div>

 	 <!-- breadcrumb -->
 	 <!-- breadcrumb -->
 	    <div class="row" style="margin-left:30px; margin-right:30px;">
 	       <div class="col-sm-12">
 	         <!-- .breadcrumb -->
 	         <ul class="breadcrumb">
 	           <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-home"></i> <?php echo ('Dashboard'); ?></a></li>
 	           <li class='active'><a href="#"><i class="fa fa-list-ul"></i> <?php echo('Field Builder');?></a></li>
 	           
 	         </ul>
 	               
 	         </div>
 	     </div> 
 	     <!-- end breadcrumb -->



	 <div class="row" style="margin-left:30px; margin-right:30px;">
	   <div class="col-sm-12">
	       <header class="panel-heading"><div class="inline font-bold">Fields</div>
          <div class="pull-right btn btn-sm  btn-info btn-rounded" data-toggle="popover" data-html="true" data-placement="bottom" data-content='Add and edit Custom Field types here! <br/><?php echo anchor('admin/help/fields', 'Help', 'attributs'); ?>' title="" data-original-title='<button type="button" class="close pull-right" data-dismiss="popover">&times;</button>Info'> <i class="fa fa-question"></i> <strong></strong> 
                          </div>

         </header>
	       <section class="panel">
	           
	           <div class="panel-body">

	           	<div class="row">
                        <div class="col-sm-10">
                            
                          
                        </div>
                        <div class="col-sm-2">
                            <a href="<?php echo site_url("admin/field_builder/add_new"); ?>">
                                <button  type="submit" class="btn btn-purplet btn-s-xs pull-right" id="">
                                <i class="fa fa-plus"></i> <strong>Add Field</strong></button>
                            </a>


                            <a href="<?php echo site_url("admin/field_builder/add_new_matrix"); ?>">
                                <button  type="submit" class="btn btn-success btn-s-xs pull-right m-t" id="">
                                <i class="fa fa-plus"></i> <strong>Matrix Field</strong></button>
                            </a>
                        </div>
                    </div>

                    <div class="line"></div>



	       
	           	


	           	<div class="table-responsive" style="margin-top:20px;">
                  <table class="table table-striped b-t" id="example">
                    <thead>

                      <tr>
                        <th width="20" class="text-muted" >Id</th>
                        <th class="text-muted">Title</th>
                        <th width="500" class="text-muted">Type</th>
                        <th class="text-muted">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    	<?php foreach ($query->result() as $row): ?>
                    		<?php $id = $row->id; ?>
                    		<tr>
		                        <td><?php echo $id; ?></td>
		                        <td>
		                        	<a href="<?php echo site_url("admin/field_builder/update_field_view/$id"); ?>"><?php echo $row->name; ?></a>
		                        </td>
		                        <td> <?php echo $row->type; ?></td>
		                        <td> 
                              <div class="pull-right" data-toggle="popover" data-html="true" data-placement="top" data-content='<?php echo anchor("admin/field_builder/search_posts_or_delete/$id", 'Delete', 'attributs'); ?>' title="" data-original-title='<button type="button" class="close pull-right" data-dismiss="popover">&times;</button>Delete'> <i class="fa fa-trash-o"></i> <strong></strong> 
                                  </div>

                               </td>
                      		</tr>
                    	<?php endforeach ?>

                     
                    </tbody>
                  </table>
                </div>
                
	           </div>
	       </section>
	   </div>
	   
	 </div>
 	







 </div>