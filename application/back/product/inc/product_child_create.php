<?php
$db = new database();
$option_sizes = array(
    "table" => "box_sizes",
);
$query_sizes = $db->select($option_sizes);
?>

<div id="product_child_<?php echo $product_child_id; ?>" style="display:none" class="panel panel-default">
    <div data-toggle="collapse" data-parent="#accordion" href="#collapse_<?php echo $product_child_id; ?>" class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse_<?php echo $product_child_id; ?>">
                สินค้าย่อย <?php echo $product_child_id; ?>
            </a>
            <a data-toggle="collapse" product-child-id="<?php echo $product_child_id; ?>"  class="close product-child" >&times </a>
        </h4>
    </div>
    <div id="collapse_<?php echo $product_child_id; ?>" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="form-group">
                <label for="child_name_add" class="col-sm-4 control-label required">ชื่อสินค้า</label>
                <div class="col-sm-8">
                    <input type="text" name="child_name_add[]" class="form-control input-sm" data-validation="required" >
                </div>
            </div>
            <div class="form-group">
                <label for="child_price_add" class="col-sm-4 control-label required">ราคา</label>
                <div class="col-sm-8">
                    <input type="text" name="child_price_add[]" value="<?php echo $price; ?>" class="form-control input-sm" data-validation="number" data-validation-allowing="float">
                </div>
            </div>
            <div class="form-group">
                <label for="child_wholesale_price_add" class="col-sm-4 control-label required">ราคาขายส่ง</label>
                <div class="col-sm-8">
                    <input type="text" name="child_wholesale_price_add[]" value="<?php echo $wholesale_price; ?>" class="form-control input-sm" data-validation="number" data-validation-allowing="float">
                </div>
            </div>
            <div class="form-group">
                <label for="child_agent_price_add" class="col-sm-4 control-label required">ราคา ตท.</label>
                <div class="col-sm-8">
                    <input type="text" name="child_agent_price_add[]" value="<?php echo $agent_price; ?>" class="form-control input-sm" data-validation="number" data-validation-allowing="float">
                </div>
            </div>
            <div class="form-group">
                <label for="child_sale_price_add" class="col-sm-4 control-label required">ราคาขาย</label>
                <div class="col-sm-8">
                    <input type="text" name="child_sale_price_add[]" value="<?php echo $sale_price; ?>" class="form-control input-sm" data-validation="number" data-validation-allowing="float">
                </div>
            </div>
            <div class="form-group">
                <label for="child_quantity_add" class="col-sm-4 control-label">จำนวน</label>
                <div class="col-sm-8">
                    <input type="text" name="child_quantity_add[]" value="<?php echo $quantity; ?>" class="form-control input-sm" data-validation="number">
                </div>
            </div>
            <div class="form-group">
                <label for="child_weight_add" class="col-sm-4 control-label">น้ำหนัก</label>
                <div class="col-sm-8">
                    <input type="text" name="child_weight_add[]" value="<?php echo $weight; ?>" class="form-control input-sm" data-validation="number">
                </div>
            </div>
            <div class="form-group">
                <label for="child_box_size_add" class="col-sm-4 control-label">ขนาดกล่อง</label>
                <div class="col-sm-8">
                    <select class="form-control input-sm" name="child_box_size_add[]">
                        <?php while ($size = $db->get($query_sizes)){
                            $selected = ($size['id']==$box_size)?'selected':'';
                            echo "<option value='{$size['id']}' {$selected}>{$size['size_name']}</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>