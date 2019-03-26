<?php if(!defined('m_guvenlik')) { exit; }
$mc_menuStr = '{"genel":{"baslik":"genel","ikon":"home","gorev":[{"baslik":"siteyi_goruntule","ikon":"home","adres":"\/","target":"_blank"},{"baslik":"giris_sayfasi","ikon":"home","gorev":"..\/yonetici"},{"baslik":"kullanicilar","ikon":"people","gorev":"kullanicilar","adres":"http:\/\/flatelli.local:8080\/sistem\/kullanicilar\/","admin":true},{"baslik":"kullanici_ekle","ikon":"person_add","gorev":"kullanicilar\/ekle.php","adres":"http:\/\/flatelli.local:8080\/sistem\/kullanicilar\/ekle.php","admin":true},{"baslik":"gruplar","ikon":"security","gorev":"gruplar","adres":"http:\/\/flatelli.local:8080\/sistem\/gruplar\/","admin":true},{"baslik":"grup_ekle","ikon":"person_add","gorev":"gruplar\/ekle.php","adres":"http:\/\/flatelli.local:8080\/sistem\/gruplar\/ekle.php","admin":true}]},"ayarlar":{"baslik":"ayarlar","ikon":"settings","gizlilik":0,"admin":true,"gorev":[{"baslik":"genel_ayarlar","ikon":"device_hub","adres":"http:\/\/flatelli.local:8080\/sistem\/ayarlar\/#temel_ayarlar","gizlilik":0,"gorev":[{"baslik":"temel_ayarlar","ikon":"apps","gorev":"ayarlar\/#temel_ayarlar","admin":true},{"baslik":"sayfa_ayarlari","ikon":"pages","gorev":"ayarlar\/#sayfa_ayarlari","admin":true},{"baslik":"kisisel_ayarlar","ikon":"person","gorev":"ayarlar\/#kisisel_ayarlar"},{"baslik":"gelismis_ayarlar","ikon":"perm_data_setting","gorev":"ayarlar\/#gelismis_ayarlar","admin":true},{"baslik":"optimizasyon_ve_yedekleme","ikon":"timeline","gorev":"ayarlar\/#optimizasyon_ve_yedekleme","gelistirici":true,"admin":true},{"baslik":"iletisim_ve_sosyal_medya","ikon":"share","gorev":"ayarlar\/#iletisim_ve_sosyal_medya","admin":true},{"baslik":"smtp_mail_ayarlari","ikon":"email","gorev":"ayarlar\/#smtp_mail_ayarlari","admin":true},{"baslik":"izin_ayarlari","ikon":"security","gorev":"ayarlar\/#izin_ayarlari","admin":true},{"baslik":"zamanlanmis_gorevler","ikon":"access_time","gorev":"ayarlar\/#zamanlanmis_gorevler","gelistirici":true,"admin":true},{"baslik":"guncellestirmeler_ve_bilgi","ikon":"update","gorev":"ayarlar\/#guncellestirmeler_ve_bilgi","admin":true}]},{"baslik":"temalar","ikon":"view_quilt","gorev":"temalar","adres":"http:\/\/flatelli.local:8080\/sistem\/temalar"},{"baslik":"tema_ekle","ikon":"add_to_queue","gorev":"temalar\/ekle.php","adres":"http:\/\/flatelli.local:8080\/sistem\/temalar\/ekle.php","gelistirici":true},{"baslik":"eklentiler","ikon":"widgets","gorev":"eklentiler","adres":"http:\/\/flatelli.local:8080\/sistem\/eklentiler","admin":true},{"baslik":"eklenti_ekle","ikon":"unarchive","gorev":"eklentiler\/ekle.php","adres":"http:\/\/flatelli.local:8080\/sistem\/eklentiler\/ekle.php","gelistirici":true},{"baslik":"api_listesi","ikon":"apps","gorev":"m-api","adres":"http:\/\/flatelli.local:8080\/sistem\/m-api\/"},{"baslik":"api_olustur","ikon":"leak_add","gorev":"m-api\/ekle.php","adres":"http:\/\/flatelli.local:8080\/sistem\/m-api\/ekle.php"},{"baslik":"ek_ozellikler","ikon":"link","gorev":"ekler","adres":"http:\/\/flatelli.local:8080\/sistem\/ekler\/","gizlilik":2},{"baslik":"ek_ozellik_olustur","ikon":"add","gorev":"ekler\/ekle.php","adres":"http:\/\/flatelli.local:8080\/sistem\/ekler\/ekle.php","gizlilik":2}]},"dosyalar":{"baslik":"dosyalar","ikon":"folder_open","gorev":[{"baslik":"tum_dosyalar","ikon":"folder_open","adres":"http:\/\/flatelli.local:8080\/sistem\/dosyalar","izin":"dosyalar"},{"baslik":"yeni_dosya_yukle","ikon":"file_upload","adres":"http:\/\/flatelli.local:8080\/sistem\/dosyalar\/yukle.php","izin":"dosyalar"}]},"mesajlar":{"baslik":"mesajlar","ikon":"email","gorev":[{"baslik":"tum_mesajlar","ikon":"email","adres":"http:\/\/flatelli.local:8080\/sistem\/mesajlar"}]},"haberler":{"baslik":"haberler","ikon":"pages","gorev":[{"baslik":"tum_haberler","ikon":"pages","gorev":"haberler\/"},{"baslik":"yeni_haber_ekle","ikon":"add","gorev":"haberler\/ekle.php"},{"baslik":"haberleri_sirala","ikon":"format_line_spacing","gorev":"haberler\/sirala.php","gizlilik":1}]},"kataloglar":{"baslik":"kataloglar","ikon":"view_quilt","gorev":[{"baslik":"tum_kataloglar","ikon":"view_quilt","gorev":"kataloglar\/"},{"baslik":"yeni_katalog_ekle","ikon":"add","gorev":"kataloglar\/ekle.php"},{"baslik":"kataloglari_sirala","ikon":"format_line_spacing","gorev":"kataloglar\/sirala.php","gizlilik":1}]},"markalar":{"baslik":"markalar","ikon":"business","gorev":[{"baslik":"tum_markalar","ikon":"business","gorev":"markalar\/"},{"baslik":"yeni_marka_ekle","ikon":"add","gorev":"markalar\/ekle.php"},{"baslik":"markalari_sirala","ikon":"format_line_spacing","gorev":"markalar\/sirala.php","gizlilik":1}]},"sayfalar":{"baslik":"sayfalar","ikon":"view_carousel","gorev":[{"baslik":"tum_sayfalar","ikon":"list","gorev":"sayfalar\/"},{"baslik":"yeni_sayfa_ekle","ikon":"add","gorev":"sayfalar\/ekle.php"},{"baslik":"sayfalari_sirala","ikon":"format_line_spacing","gorev":"sayfalar\/sirala.php","gizlilik":1}]},"urunler":{"gorev":[{"baslik":"kategoriler","ikon":"list","gorev":"urunkategorileri\/","izin":"urunkategorileri"},{"baslik":"yeni_kategori_ekle","ikon":"add","gorev":"urunkategorileri\/ekle.php","izin":"urunkategorileri"},{"baslik":"kategorileri_sirala","ikon":"format_line_spacing","gorev":"urunkategorileri\/sirala.php","gizlilik":1,"izin":"urunkategorileri"},{"baslik":"tum_urunler","ikon":"shopping_cart","gorev":"urunler\/"},{"baslik":"yeni_urun_ekle","ikon":"add","gorev":"urunler\/ekle.php"},{"baslik":"urunleri_sirala","ikon":"format_line_spacing","gorev":"urunler\/sirala.php","gizlilik":1}],"baslik":"urunler","ikon":"shopping_cart"}}';