<form method="post" enctype="multipart/form-data" action="../Controller/tccController.php">
    <table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
        <tr>
            <td width="246">
                <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                <input name="userfile" type="file" id="userfile">
                <input type="textfield" name="nometcc" value="nometcc" id="nometcc">
                <input type="button" name="cancelar" value="voltar" onclick="window.open('../View/inicioAluno.php');" />

            </td>
            <td width="80"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
        </tr>
    </table>
</form>
