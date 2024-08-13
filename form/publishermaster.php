<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publisher Master</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <table>
        <tr>
            <td>
                <fieldset>
                    <legend>Publisher Details:</legend>
                    <form action="publisherConnection.php" method="post" name="formPublishermaster">
                        <table>
                            <tr>
                                <td>Publisher Name:</td>
                                <td>
                                    <input type="text" name="txtpubname" size="30" maxlength="30" tabindex="1"
                                           value="<?php echo isset($_POST['txtpubname']) ? htmlspecialchars($_POST['txtpubname']) : ''; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Company Name:</td>
                                <td>
                                    <input type="text" name="txtCompany" size="30" maxlength="30" tabindex="2"
                                           value="<?php echo isset($_POST['txtCompany']) ? htmlspecialchars($_POST['txtCompany']) : ''; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Type of Book:</td>
                                <td>
                                    <?php
                                    $selectedBookType = isset($_POST['optbook']) ? $_POST['optbook'] : '';
                                    ?>
                                    <label>
                                        <input type="radio" name="optbook" value="Technical" tabindex="3"
                                               <?php echo $selectedBookType === 'Technical' ? 'checked' : ''; ?>> Technical
                                    </label>
                                    <label>
                                        <input type="radio" name="optbook" value="Non-Technical" tabindex="4"
                                               <?php echo $selectedBookType === 'Non-Technical' ? 'checked' : ''; ?>> Non-Technical
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Location:</td>
                                <td>
                                    <?php
                                    $selectedCities = isset($_POST['chkbook']) ? $_POST['chkbook'] : [];
                                    ?>
                                    <label>
                                        <input type="checkbox" name="chkbook[]" value="Delhi" tabindex="5"
                                               <?php echo in_array('Delhi', $selectedCities) ? 'checked' : ''; ?>> Delhi
                                    </label>
                                    <label>
                                        <input type="checkbox" name="chkbook[]" value="Mumbai" tabindex="6"
                                               <?php echo in_array('Mumbai', $selectedCities) ? 'checked' : ''; ?>> Mumbai
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Select A Book:</td>
                                <td>
                                    <?php
                                    $selectedBook = isset($_POST['selectbook']) ? $_POST['selectbook'] : '';
                                    ?>
                                    <label>
                                        <select name="selectbook" size="1" tabindex="7">
                                            <option value="1" <?php echo $selectedBook === '1' ? 'selected' : ''; ?>>ORACLE</option>
                                            <option value="2" <?php echo $selectedBook === '2' ? 'selected' : ''; ?>>JAVA</option>
                                            <option value="3" <?php echo $selectedBook === '3' ? 'selected' : ''; ?>>PHP</option>
                                            <option value="4" <?php echo $selectedBook === '4' ? 'selected' : ''; ?>>APACHE</option>
                                        </select>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Publisher Code:</td>
                                <td>
                                    <label>
                                        <input type="password" name="pwdpub" size="30" maxlength="15" tabindex="8">
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Comments:</td>
                                <td>
                                    <label>
                                        <textarea name="comment" tabindex="9" rows="6" cols="30"><?php echo htmlspecialchars(isset($_POST['comment']) ? $_POST['comment'] : ''); ?></textarea>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="Submit" tabindex="10">
                                    <input type="reset" value="Reset" tabindex="11">
                                </td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </td>
        </tr>
    </table>
</body>
</html>
