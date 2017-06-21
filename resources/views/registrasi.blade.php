<!DOCTYPE html>
<html>
<head>
	<title>registrasi</title>
	<h1>Registrasi</h1>
</head>
<body>
	<div class="links">
                    <a href="homeController">Home</a>
                    <a href="produkController">Produk</a>
                    <a href="pertanyaanController">Pertanyaan</a>
                    <a href="about_usController">About Us</a>
                    <a href="voucher_makanController">Voucher Makan</a>
                    <a href="contact_usController">Contact Us</a>
                    <a href="semuaProdukController">Semua Produk</a>
					<a href="registrasiController">Registrasi</a>                    
                </div>

                <form action="registrasiController" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                    <table>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name"/></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="username"/></td>
                        </tr>   
                        <tr>
                            <td>Password</td>
                            <td><input type="text" name="password"/></td>
                        </tr>    
                        <tr>
                            <td colspan="2" align="center"><input type="submit" value="Register"/></td>
                        </tr>

                    </table>
                </form>    
</body>
</html>