<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('suppliers')->delete();
       //insert some dummy records
       DB::table('suppliers')->insert(array(
  array('SupplierID' => '1','CompanyName' => 'Exotic Liquids','ContactName' => 'Charlotte Cooper','ContactTitle' => 'Purchasing Manager','Address' => '49 Gilbert St.','City' => 'London','Region' => NULL,'PostalCode' => 'EC1 4SD','Country' => 'UK','Phone' => '(171) 555-2222','Fax' => NULL,'HomePage' => NULL),
  array('SupplierID' => '2','CompanyName' => 'New Orleans Cajun Delights','ContactName' => 'Shelley Burke','ContactTitle' => 'Order Administrator','Address' => 'P.O. Box 78934','City' => 'New Orleans','Region' => 'LA','PostalCode' => '70117','Country' => 'USA','Phone' => '(100) 555-4822','Fax' => NULL,'HomePage' => '#CAJUN.HTM#'),
  array('SupplierID' => '3','CompanyName' => 'Grandma Kelly\'s Homestead','ContactName' => 'Regina Murphy','ContactTitle' => 'Sales Representative','Address' => '707 Oxford Rd.','City' => 'Ann Arbor','Region' => 'MI','PostalCode' => '48104','Country' => 'USA','Phone' => '(313) 555-5735','Fax' => '(313) 555-3349','HomePage' => NULL),
  array('SupplierID' => '4','CompanyName' => 'Tokyo Traders','ContactName' => 'Yoshi Nagase','ContactTitle' => 'Marketing Manager','Address' => '9-8 Sekimai
Musashino-shi','City' => 'Tokyo','Region' => NULL,'PostalCode' => '100','Country' => 'Japan','Phone' => '(03) 3555-5011','Fax' => NULL,'HomePage' => NULL),
  array('SupplierID' => '5','CompanyName' => 'Cooperativa de Quesos \'Las Cabras\'','ContactName' => 'Antonio del Valle Saavedra ','ContactTitle' => 'Export Administrator','Address' => 'Calle del Rosal 4','City' => 'Oviedo','Region' => 'Asturias','PostalCode' => '33007','Country' => 'Spain','Phone' => '(98) 598 76 54','Fax' => NULL,'HomePage' => NULL),
  array('SupplierID' => '6','CompanyName' => 'Mayumi\'s','ContactName' => 'Mayumi Ohno','ContactTitle' => 'Marketing Representative','Address' => '92 Setsuko
Chuo-ku','City' => 'Osaka','Region' => NULL,'PostalCode' => '545','Country' => 'Japan','Phone' => '(06) 431-7877','Fax' => NULL,'HomePage' => 'Mayumi\'s (on the World Wide Web)#http://www.microsoft.com/accessdev/sampleapps/mayumi.htm#'),
  array('SupplierID' => '7','CompanyName' => 'Pavlova, Ltd.','ContactName' => 'Ian Devling','ContactTitle' => 'Marketing Manager','Address' => '74 Rose St.
Moonie Ponds','City' => 'Melbourne','Region' => 'Victoria','PostalCode' => '3058','Country' => 'Australia','Phone' => '(03) 444-2343','Fax' => '(03) 444-6588','HomePage' => NULL),
  array('SupplierID' => '8','CompanyName' => 'Specialty Biscuits, Ltd.','ContactName' => 'Peter Wilson','ContactTitle' => 'Sales Representative','Address' => '29 King\'s Way','City' => 'Manchester','Region' => NULL,'PostalCode' => 'M14 GSD','Country' => 'UK','Phone' => '(161) 555-4448','Fax' => NULL,'HomePage' => NULL),
  array('SupplierID' => '9','CompanyName' => 'PB Knckebrd AB','ContactName' => 'Lars Peterson','ContactTitle' => 'Sales Agent','Address' => 'Kaloadagatan 13','City' => 'Gteborg','Region' => NULL,'PostalCode' => 'S-345 67','Country' => 'Sweden ','Phone' => '031-987 65 43','Fax' => '031-987 65 91','HomePage' => NULL),
  array('SupplierID' => '10','CompanyName' => 'Refrescos Americanas LTDA','ContactName' => 'Carlos Diaz','ContactTitle' => 'Marketing Manager','Address' => 'Av. das Americanas 12.890','City' => 'So Paulo','Region' => NULL,'PostalCode' => '5442','Country' => 'Brazil','Phone' => '(11) 555 4640','Fax' => NULL,'HomePage' => NULL),
  array('SupplierID' => '11','CompanyName' => 'Heli Swaren GmbH & Co. KG','ContactName' => 'Petra Winkler','ContactTitle' => 'Sales Manager','Address' => 'Tiergartenstrae 5','City' => 'Berlin','Region' => NULL,'PostalCode' => '10785','Country' => 'Germany','Phone' => '(010) 9984510','Fax' => NULL,'HomePage' => NULL),
  array('SupplierID' => '12','CompanyName' => 'Plutzer Lebensmittelgromrkte AG','ContactName' => 'Martin Bein','ContactTitle' => 'International Marketing Mgr.','Address' => 'Bogenallee 51','City' => 'Frankfurt','Region' => NULL,'PostalCode' => '60439','Country' => 'Germany','Phone' => '(069) 992755','Fax' => NULL,'HomePage' => 'Plutzer (on the World Wide Web)#http://www.microsoft.com/accessdev/sampleapps/plutzer.htm#'),
  array('SupplierID' => '13','CompanyName' => 'Nord-Ost-Fisch Handelsgesellschaft mbH','ContactName' => 'Sven Petersen','ContactTitle' => 'Coordinator Foreign Markets','Address' => 'Frahmredder 112a','City' => 'Cuxhaven','Region' => NULL,'PostalCode' => '27478','Country' => 'Germany','Phone' => '(04721) 8713','Fax' => '(04721) 8714','HomePage' => NULL),
  array('SupplierID' => '14','CompanyName' => 'Formaggi Fortini s.r.l.','ContactName' => 'Elio Rossi','ContactTitle' => 'Sales Representative','Address' => 'Viale Dante, 75','City' => 'Ravenna','Region' => NULL,'PostalCode' => '48100','Country' => 'Italy','Phone' => '(0544) 60323','Fax' => '(0544) 60603','HomePage' => '#FORMAGGI.HTM#'),
  array('SupplierID' => '15','CompanyName' => 'Norske Meierier','ContactName' => 'Beate Vileid','ContactTitle' => 'Marketing Manager','Address' => 'Hatlevegen 5','City' => 'Sandvika','Region' => NULL,'PostalCode' => '1320','Country' => 'Norway','Phone' => '(0)2-953010','Fax' => NULL,'HomePage' => NULL),
  array('SupplierID' => '16','CompanyName' => 'Bigfoot Breweries','ContactName' => 'Cheryl Saylor','ContactTitle' => 'Regional Account Rep.','Address' => '3400 - 8th Avenue
Suite 210','City' => 'Bend','Region' => 'OR','PostalCode' => '97101','Country' => 'USA','Phone' => '(503) 555-9931','Fax' => NULL,'HomePage' => NULL),
  array('SupplierID' => '17','CompanyName' => 'Svensk Sjfda AB','ContactName' => 'Michael Bjrn','ContactTitle' => 'Sales Representative','Address' => 'Brovallavgen 231','City' => 'Stockholm','Region' => NULL,'PostalCode' => 'S-123 45','Country' => 'Sweden','Phone' => '08-123 45 67','Fax' => NULL,'HomePage' => NULL),
  array('SupplierID' => '18','CompanyName' => 'Aux joyeux ecclsiastiques','ContactName' => 'Guylne Nodier','ContactTitle' => 'Sales Manager','Address' => '203, Rue des Francs-Bourgeois','City' => 'Paris','Region' => NULL,'PostalCode' => '75004','Country' => 'France','Phone' => '(1) 03.83.00.68','Fax' => '(1) 03.83.00.62','HomePage' => NULL),
  array('SupplierID' => '19','CompanyName' => 'New England Seafood Cannery','ContactName' => 'Robb Merchant','ContactTitle' => 'Wholesale Account Agent','Address' => 'Order Processing Dept.
2100 Paul Revere Blvd.','City' => 'Boston','Region' => 'MA','PostalCode' => '02134','Country' => 'USA','Phone' => '(617) 555-3267','Fax' => '(617) 555-3389','HomePage' => NULL),
  array('SupplierID' => '20','CompanyName' => 'Leka Trading','ContactName' => 'Chandra Leka','ContactTitle' => 'Owner','Address' => '471 Serangoon Loop, Suite #402','City' => 'Singapore','Region' => NULL,'PostalCode' => '0512','Country' => 'Singapore','Phone' => '555-8787','Fax' => NULL,'HomePage' => NULL),
  array('SupplierID' => '21','CompanyName' => 'Lyngbysild','ContactName' => 'Niels Petersen','ContactTitle' => 'Sales Manager','Address' => 'Lyngbysild
Fiskebakken 10','City' => 'Lyngby','Region' => NULL,'PostalCode' => '2800','Country' => 'Denmark','Phone' => '43844108','Fax' => '43844115','HomePage' => NULL),
  array('SupplierID' => '22','CompanyName' => 'Zaanse Snoepfabriek','ContactName' => 'Dirk Luchte','ContactTitle' => 'Accounting Manager','Address' => 'Verkoop
Rijnweg 22','City' => 'Zaandam','Region' => NULL,'PostalCode' => '9999 ZZ','Country' => 'Netherlands','Phone' => '(12345) 1212','Fax' => '(12345) 1210','HomePage' => NULL),
  array('SupplierID' => '23','CompanyName' => 'Karkki Oy','ContactName' => 'Anne Heikkonen','ContactTitle' => 'Product Manager','Address' => 'Valtakatu 12','City' => 'Lappeenranta','Region' => NULL,'PostalCode' => '53120','Country' => 'Finland','Phone' => '(953) 10956','Fax' => NULL,'HomePage' => NULL),
  array('SupplierID' => '24','CompanyName' => 'G\'day, Mate','ContactName' => 'Wendy Mackenzie','ContactTitle' => 'Sales Representative','Address' => '170 Prince Edward Parade
Hunter\'s Hill','City' => 'Sydney','Region' => 'NSW','PostalCode' => '2042','Country' => 'Australia','Phone' => '(02) 555-5914','Fax' => '(02) 555-4873','HomePage' => 'G\'day Mate (on the World Wide Web)#http://www.microsoft.com/accessdev/sampleapps/gdaymate.htm#'),
  array('SupplierID' => '25','CompanyName' => 'Ma Maison','ContactName' => 'Jean-Guy Lauzon','ContactTitle' => 'Marketing Manager','Address' => '2960 Rue St. Laurent','City' => 'Montral','Region' => 'Qubec','PostalCode' => 'H1J 1C3','Country' => 'Canada','Phone' => '(514) 555-9022','Fax' => NULL,'HomePage' => NULL),
  array('SupplierID' => '26','CompanyName' => 'Pasta Buttini s.r.l.','ContactName' => 'Giovanni Giudici','ContactTitle' => 'Order Administrator','Address' => 'Via dei Gelsomini, 153','City' => 'Salerno','Region' => NULL,'PostalCode' => '84100','Country' => 'Italy','Phone' => '(089) 6547665','Fax' => '(089) 6547667','HomePage' => NULL),
  array('SupplierID' => '27','CompanyName' => 'Escargots Nouveaux','ContactName' => 'Marie Delamare','ContactTitle' => 'Sales Manager','Address' => '22, rue H. Voiron','City' => 'Montceau','Region' => NULL,'PostalCode' => '71300','Country' => 'France','Phone' => '85.57.00.07','Fax' => NULL,'HomePage' => NULL),
  array('SupplierID' => '28','CompanyName' => 'Gai pturage','ContactName' => 'Eliane Noz','ContactTitle' => 'Sales Representative','Address' => 'Bat. B
3, rue des Alpes','City' => 'Annecy','Region' => NULL,'PostalCode' => '74000','Country' => 'France','Phone' => '38.76.98.06','Fax' => '38.76.98.58','HomePage' => NULL),
  array('SupplierID' => '29','CompanyName' => 'Forts d\'rables','ContactName' => 'Chantal Goulet','ContactTitle' => 'Accounting Manager','Address' => '148 rue Chasseur','City' => 'Ste-Hyacinthe','Region' => 'Qubec','PostalCode' => 'J2S 7S8','Country' => 'Canada','Phone' => '(514) 555-2955','Fax' => '(514) 555-2921','HomePage' => NULL)
)
);
    }
}
