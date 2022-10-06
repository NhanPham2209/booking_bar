<div class="form-group">
                    <label for="">Trạng thái</label>
                    <select name="change_status" id="">
                        <option value="<?php echo$status;  ?>"><?php echo$status;?></option>
                        <?php 
                            if($status == 'Chưa gọi') {
                                echo "<option value='Đã gọi'>Đã gọi</option>";         
                            } else {
                                echo "<option value='Chưa gọi'>Chưa gọi</option>";         
                            }    
                        ?>
                    </select>
                </div>