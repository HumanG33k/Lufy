<div class="box">
  <div class="title"><?=__('Changer le mot de passe')?></div>
  
  <?=form_tag('@user_password')?>
  <?=$form->renderHiddenFields()?>
    
    <table>
    	<?=$form['old_password']->renderRow()?>
    	<?=$form['password']->renderRow()?>
    	<?=$form['password_again']->renderRow()?>
    	<tr>
    		<td colspan="2" class="actions">
    		  <input type="submit" value="<?=__('Modifier')?>"/>
    		</td>
    	</tr>
    </table>
    
  </form>
</div>