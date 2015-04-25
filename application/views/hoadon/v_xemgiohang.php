<?php if(!$this->cart->contents()):
    echo 'Bạn chưa mua sản phẩm nào.';
else:
?>
 
<?php echo form_open('hoadon/suagiohang'); ?>
<div id="giohang">
<table width="100%" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            
            <th>Sản phẩm</th>
			<th>Số lượng</th>
            <th>Giá</th>
            <th>Tổng</th>
			<th>Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach($this->cart->contents() as $items): ?>
         
        <?php echo form_hidden('rowid[]', $items['rowid']); ?>
        <tr <?php if($i&1){ echo 'class="alt"'; }?>>
			<td><?php echo $items['name']; ?></td>
            <td>
                <?php echo form_input(array('name' => 'qty[]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>
            </td>             
            <td><?php echo $this->cart->format_number($items['price']).' VND'; ?></td>
            <td><?php echo $this->cart->format_number($items['subtotal']).' VND'; ?></td>
			<td class="cot"><a href="<?php echo base_url('hoadon/xoatdgh')?> ?>"><img src="<?php echo base_url('public/icon/xoa.png');?>" title="Xóa"/></a></td>
        </tr>
         
        <?php $i++; ?>
        <?php endforeach; ?>
         
        <tr>
            <td></td>
            <td></td>
            <td><strong>Thanh toán</strong></td>
            <td><?php echo $this->cart->format_number($this->cart->total().'000').' VND'; ?></td>
			<td></td>
        </tr>
    </tbody>
</table>
 
<p><?php echo form_submit('', 'Sửa giỏ hàng', 'class="suagh"'); echo anchor('hoadon/xoagiohang', 'Xóa giỏ hàng', 'class="empty"');?></p>
</br>
<p><?php echo anchor('hoadon/taohd','Kết thúc mua hàng', 'class="ketthuc"');?></p>
<p><small>Nếu bạn sửa số lượng thành 0, sản phẩm đó sẽ bị xóa khỏi giỏ hàng.</small></p>
</div>
<?php 
echo form_close(); 
endif;
?>