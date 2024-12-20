<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Job Application Form</title>
    <script>
function calculateAge() {
    var dob = document.getElementById('dob').value;
    var today = new Date();
    var birthDate = new Date(dob);
    var age = today.getFullYear() - birthDate.getFullYear();
    var month = today.getMonth() - birthDate.getMonth();
    if (month < 0 || (month === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    document.getElementById('age').value = age;
}
</script>
</head>
<style>
  table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: flex;
  }
  th, td {
  padding-top: flex;
  padding-bottom: flex;
  padding-left: flex;
  padding-right: flex;
  }
</style>
<body>
  <form action="pdf.php" method="post">
  <table align="center" border="0px">
    <h1 text align="center">APPLICATION FORM FOR ISSUANCE CERTIFICATE</h1>
    <tr>
      <td colspan="4">
        <b>Personal Detail</b>
      </td>
    <tr>
      <td>
        Applicant Name  :<td colspan="3"><input type="text" name="Appname">
      </td>
    </tr>
    <tr>
      <td>
        Gender  :<td><select id="gender" name="gender">
          <option value=""></option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      <td>
        Marital Status  :<td><select id="marital_status" name="marital_status">
          <option value=""></option>
          <option value="unmarried">Unmarried</option>
          <option value="married">Married</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>
        Date of Birth  :<td><input type="date" id="dob" name="dob" onchange="calculateAge()" name="date">
      <td>
        Age  :<td><input type="number" id="age" name="age" readonly>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <b>Parents Details</b>
      </td>
    </tr>
    <tr>
      <td>Father Name :<td colspan="3"><input type="text" name="fname"></td>
    </tr>
    <tr>
      <td>Mother Name :<td colspan="3"><input type="text" name="mname"></td>
    </tr>
    <td colspan="4">
      <b>Spouse Details</b>
    </td>
  </tr>
  <tr>
    <td>
      Spouse Name :<td colspan="3"><input type="text"></td>
    </td>
  </tr>
  <tr>
    <td>
      Relation With Applicant :<td colspan="3"><input type="text"></td>
    </td>
  </tr>
  <Tr>
    <td colspan="4">
      <b>Contact Details</b>
    </td>
  </Tr>
  <tr>
    <td>
      Email :<td><input type="email" name="email"><td>Mobile No :<td><input type="number"></td>
    </td>
  </tr>
  <tr>
    <td colspan="4">
      <b>Permanent Address</b>
    </td>
  </tr>
  <tr>
    <td>
      House No/Name :<td><input type="text" name="hno"><td>Village/Town  :<td><select name="village" id="village">
        <option value=""></option>
         <option value="38">Amlabeda</option>
        <option value="39">Badakuleibira</option>
        <option value="40">Badamtalia</option>
        <option value="41">Badasiha</option>
        <option value="42">Baledihi</option>
        <option value="43">Baghia</option>
        <option value="44">Bambod</option>
        <option value="45">Banduduma</option>
        <option value="46">Barudihi</option>
        <option value="47">Basantapur</option>
        <option value="48">Belposi</option>
        <option value="49">Bhadusahi</option>
        <option value="50">Bhagabeda</option>
        <option value="51">Bitadihi</option>
        <option value="52">Budamara</option>
        <option value="53">Chandikhaman</option>
        <option value="54">Chitritangar</option>
        <option value="55">Daunda</option>
        <option value="56">Deokundi</option>
        <option value="57">Dhalpur</option>
        <option value="58">Dighi</option>
        <option value="59">Dighiabeda</option>
        <option value="60">Dumadihi</option>
        <option value="61">Dumuria</option>
        <option value="62">Ghumal</option>
        <option value="63">Giria</option>
        <option value="64">Gohira</option>
        <option value="65">Guduta</option>
        <option value="66">Harilabeda</option>
        <option value="67">Hensada</option>
        <option value="68">Heselpata</option>
        <option value="69">Heselpata</option>
        <option value="70">Jamda</option>
        <option value="71">Jarkani</option>
        <option value="72">Jatapani</option>
        <option value="73">Kainpur</option>
        <option value="74">Kandasar</option>
        <option value="75">Kankha</option>
        <option value="76">Khairpal</option>
        <option value="77">Khediadunguri</option>
        <option value="78">Kucheipal</option>
        <option value="79">Kudahansa</option>
        <option value="80">Laxmiposi</option>
        <option value="81">Madhupur</option>
        <option value="82">Mahiskudar</option>
        <option value="83">Manbir</option>
        <option value="84">Matiali</option>
        <option value="85">Mugudi</option>
        <option value="86">Natuar</option>
        <option value="87">Ulidihi</option>
        <option value="88">Pahadpur</option>
        <option value="89">Pasna</option>
        <option value="90">Pitidhiri</option>
        <option value="91">Radhanagar</option>
        <option value="92">Raghunathpur</option>
        <option value="93">Rangamatia</option>
        <option value="94">Rangamatia</option>
        <option value="95">Rugulidihi</option>
        <option value="96">Rumapahadi</option>
        <option value="97">Sagajodi</option>
        <option value="98">Sankuleibira</option>
        <option value="99">Sunamara</option>
        <option value="100">Talgaon</option>
        <option value="101">Tarana</option>
        <option value="102">Tendra</option>
        <option value="103">Tendra Hill-II</option>
      </select></td>
    </td>
  </tr>
  <tr>
    <td>
      District  :<td><select name="dist" id="dist">
        <option value="">Mayurbhanj</option>
      </select><td>Sub Division :<td><select name="subd" id="subd" style="font-size:medium">
        <option value=""></option>
         <option value="1">Bamanghati</option>
        <option value="2">Baripada</option>
        <option value="3">Kaptipada</option>
        <option value="4">Panchapid</option>
      </select></td>
    </td>
  </tr>
  <tr>
    <td>
      Tahasil :<td><select name="tahasil" id="tahasil">
        <option value=""></option>
         <option value="5">Jamda</option>
        <option value="6">Bahalda</option>
        <option value="7">Bijatola</option>
        <option value="8">Bisoi</option>
        <option value="9">Kusumi</option>
        <option value="10">Rairangpur</option>
        <option value="11">Tiring</option>
      </select><td>RI Circle  :<td><select name="ri_circle" id="ri_circle">
        <option value=""></option>
         <option value="104">Jamda</option>
        <option value="105">Jarkani</option>
        <option value="106">Moranda</option>
        <option value="107">Talgaon</option>
        <option value="108">Dundu</option>
      </select></td>
    </td>
  </tr>
  <tr>
    <td>
      Block :<td><select name="block" id="block">
        <option value=""></option>
        <option value="12">Jamda</option>
        <option value="13">Bahalada</option>
        <option value="14">Bangiriposi</option>
        <option value="15">Baripada</option>
        <option value="16">Barsahi</option>
        <option value="17">Betanati</option>
        <option value="18">Bijatola</option>
        <option value="19">Bisoi</option>
        <option value="20">Gopabandhunagar</option>
        <option value="21">Jashipur</option>
        <option value="22">Kaptipada</option>
        <option value="23">Karanjia</option>
        <option value="24">Khunta</option>
        <option value="25">Kuliana</option>
        <option value="26">Kusumi</option>
        <option value="27">Moroda</option>
        <option value="28">Rairangpur</option>
        <option value="29">Raruan</option>
        <option value="30">Rasagobindpur</option>
        <option value="31">Samakhunta</option>
        <option value="32">Saraskana</option>
        <option value="33">Sukuruli</option>
        <option value="34">Suliapada</option>
        <option value="35">Thakurmunda</option>
        <option value="36">Tiring</option>
        <option value="37">Udala</option>
      </select><td>Police Station  :<td><select name="block" id="block">
        <option value=""></option>
         <option value="38">Jamda</option>
        <option value="39">Bahalada</option>
        <option value="40">Bangiriposi</option>
        <option value="41">Baripada</option>
        <option value="42">Barsahi</option>
        <option value="43">Betanati</option>
        <option value="44">Bijatola</option>
        <option value="45">Bisoi</option>
        <option value="46">Gopabandhunagar</option>
        <option value="47">Jashipur</option>
        <option value="48">Kaptipada</option>
        <option value="49">Karanjia</option>
        <option value="50">Khunta</option>
        <option value="51">Kuliana</option>
        <option value="52">Kusumi</option>
        <option value="53">Moroda</option>
        <option value="54">Rairangpur</option>
        <option value="55">Raruan</option>
        <option value="56">Rasagobindpur</option>
        <option value="57">Samakhunta</option>
        <option value="58">Saraskana</option>
        <option value="59">Sukuruli</option>
        <option value="60">Suliapada</option>
        <option value="61">Thakurmunda</option>
        <option value="62">Tiring</option>
        <option value="63">Udala</option>
      </select></td>
    </td>
  </tr>
  <tr>
    <td>
      Post Office :<td><select name="ri_circle" id="ri_circle">
        <option value=""></option>
         <option value="104">Jamda</option>
        <option value="105">Jarkani</option>
        <option value="106">Moranda</option>
        <option value="107">Talgaon</option>
        <option value="108">Dundu</option>
        <option value="109"> Pasna</option>
      </select><td>Pin :<td><input type="number"></td>
    </td>
  </tr>
  <tr>
    <td colspan="4">
      <b>Submitter Details</b>
    </td>
  </tr>
  <tr>
    <td>
      Is applicant and submitter are same?<td colspan="3"><select id="same">
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>
      Submitter's Name  :<td colspan="3"><input type="text" name="submitter_name"><br></td>
    </td>
  </tr>
  <tr>
    <td>
      Relation With Applicant :<td colspan="3"><input type="text" name="relation"></td>
    </td>
  </tr>
  <tr>
    <td>
      Purpose :<td colspan="3"><input type="text" name="purpose"></td>
    </td>
  </tr>
  <tr>
    <td colspan="4">
      <b>Present Address</b>
    </td>
  </tr>
  <tr>
    <td>
      Is applicant and submitter are same?<td colspan="3"><select id="same">
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>(If "No" please fill the Present address given below)</td>
  </tr>
  <tr>
    <td>
      House No/Name :<td><input type="text" name="hno"><td>Village/Town  :<td><input type="text" name="Village"></td>
    </td>
  </tr>
  <tr>
    <td>
      District  :<td><input type="text" name="distric"><td>Sub Division :<td><input type="text" name="subdi"></td>
    </td>
  </tr>
  <tr>
    <td>
      Tahasil :<td><input type="text" name="tahasil"><td>RI Circle  :<td><input type="text" name="ri"></td>
    </td>
  </tr>
  <tr>
    <td>
      Block :<td><input type="text" name="bloc"><td>Police Station  :<td><input type="text" name="police"></td>
    </td>
  </tr>
  <tr>
    <td>
      Post Office :<td><input type="text" name="post"><td>Pin :<td><input type="number"></td>
    </td>
  </tr>
  <tr>
    <td colspan="4">
      <b>Land Record Details</b>
    </td>
  </tr>
  <tr>
    <td>
      Is ROR Produced?<td colspan="3"><select id="same">
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>(If "YES" please provide the LandRecord Details)</td>
  </tr>
  <tr>
    <td>
      District  :<td><input type="text" name="distric"><td>Sub Division :<td><input type="text" name="subdi"></td>
    </td>
  </tr>
  <tr>
    <td>
      Tahasil :<td><input type="text" name="tahasil"><td>RI Circle  :<td><input type="text" name="ri"></td>
    </td>
  </tr>
  <tr>
    <td>
      Police Station :<td><input type="text" name="police"><td>Mouza(Revenue Village)  :<td><input type="text" name="mouza"></td>
    </td>
  </tr>
  <tr>
    <td>
      Khata No :<td><input type="number" name="pkhata"><td>Recorded Tenant (Land Owner) :<td><input type="number" name="tenant"></td>
    </td>
  </tr>
  <tr>
    <td>
      Relation of the applicant with Recorded Tenant<td colspan="3"><textarea id="record_tenant" name="record_tenant" utofocus="flex"></textarea> 
    </td>
  </tr>
  <tr>
    <td>
      <b>Plot Details</b>
    </td>
  </tr>
  <tr>
    <td colspan="4">
      <table style="width:80%"; border="1px"; align="center">
        <tr>
          <th>Sl No.</th>
          <th>Plot No*</th>
          <th>Area*</th>
          <th>Kisam*</th>
        </tr>
        <tr>
          <td align="center">1</td>
          <td align="center"><Input type="number"></td>
            <td align="center"><Input type="number"></td>
            <td align="center"><Input type="number"></td>
        </tr>
      </table>
    </td>
  </tr>







  <tr>
    <td colspan="4">
        <button type="submit" id="button" name="submit">Submit Application</button>
    </td>
  </tr>
  </table>
  </form>
</body>
</html>