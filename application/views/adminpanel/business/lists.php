<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default grid'>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 业务列表
        <div class='panel-tools'>
            <div class='btn-group'>
                 <a class="btn " href="<?php echo base_url('adminpanel/business/add')?>"><span class="glyphicon glyphicon-plus"></span> 添加 </a>             </div>
            <div class='badge'><?php echo count($data_list)?></div>
        </div>
    </div>
        <div class='panel-filter '>
      <div class='row'>
        <div class='col-md-12'>
        <form class="form-inline" role="form" method="get">
          
<div class="form-group">
<label for="keyword" class="control-label form-control-static">关键词</label>
<input class="form-control" type="text" name="keyword"  value="<?php echo isset($data_info['keyword'])? $data_info['keyword']:"";?>" id="keyword" placeholder="请输入关键词"/></div>

<div class="form-group">
<label for="keywords" class="form-control-static">价格:</label>
<input class="form-control" size="3" type="number"  name="charge_1"  id="chargecharge1" placeholder="价格大于等于范围"/> - <input class="form-control" size="3" type="number"  name="charge_2"  id="chargecharge2" placeholder="价格小于等于范围"/></div>
<button type="submit" name="dosubmit" value="搜索" class="btn btn-success"><i class='glyphicon glyphicon-search'></i></button>        </form>
        </div>
      </div> 
    </div>
          <form method="post" id="form_list"  action="<?php echo base_url('adminpanel/business/delete_all')?>"  > 
    <div class='panel-body '>
    <?php if($data_list):?>
        <table class="table table-hover dataTable" id="checkAll">
          <thead>
            <tr>
              <th>#</th>
                            <?php $css=""; $next_url = base_url('adminpanel/business?order=name&dir=desc'); ?>
              <?php if(($order=='name'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/business?order=name&dir=asc'); ?>
              <?php } elseif (($order=='name'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">业务名称</th>
                            <?php $css=""; $next_url = base_url('adminpanel/business?order=charge&dir=desc'); ?>
              <?php if(($order=='charge'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/business?order=charge&dir=asc'); ?>
              <?php } elseif (($order=='charge'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?>
<!--               <th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">价格</th>
 -->                            <?php $css=""; $next_url = base_url('adminpanel/business?order=categorys&dir=desc'); ?>
              <?php if(($order=='categorys'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/business?order=categorys&dir=asc'); ?>
              <?php } elseif (($order=='categorys'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">信息分类</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($data_list as $k=>$v):?>
            <tr>
              <td><input type="checkbox" name="pid[]" value="<?php echo $v['business_id']?>" /></td>
                             <td><?php echo $v['name']?></td>
<!--                             <td><?php echo $v['charge']?></td>
 -->                            <td><?php echo $v['categorys']?></td>
              <td>
                            	<a href="<?php echo base_url('adminpanel/business/readonly/'.$v['business_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-share-alt"></span> 查看</a>
                                            <a href="<?php echo base_url('adminpanel/docdata/add/'.$v['business_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> 创建文档</a>
                                            <a href="<?php echo base_url('adminpanel/business/edit/'.$v['business_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> 修改</a>
                                            <button type="button" class="btn btn-default btn-xs delete-btn" value="<?php echo $v['business_id'];?>"><span class="glyphicon glyphicon-remove"></span> 删除</button>
                
              </td>
            </tr>
            <?php endforeach;?>
            
          </tbody>
        </table> 
    	</div>
      <div class="panel-footer">
        <div class="pull-left">
          <div class="btn-group">
                  <button type="button" class="btn btn-default" id="reverseBtn"><span class="glyphicon glyphicon-ok"></span> 反选</button>
            <button type="button" id="deleteBtn"  class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> 删除勾选</button>
                 </div>
      </div>
        <div class="pull-right">
        <?php echo $pages;?>
        </div>
      </div> 
      </form>  
  </div>
<?php else:?>
    <div class="no-result">-- 暂无数据 -- </div>
<?php endif;?>

	    <script language="javascript" type="text/javascript">
    require(['<?php echo SITE_URL?>scripts/common.js'], function (common) {
        require(['<?php echo SITE_URL?>scripts/adminpanel/business/lists.js']);
    });
</script>
    