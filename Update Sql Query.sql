UPDATE
    tblinfo
SET
    Zone = 'Zone 1', Region = 'Region 2', Location = 'Location 5', Hub = 'Hub 10'
WHERE
    id = '4';

***************************************************************************************

UPDATE
    tblinfo
LEFT JOIN tblzone ON tblinfo.Zone = tblzone.Zoneid
LEFT JOIN tblregion ON tblinfo.Region = tblregion.Regionid
LEFT JOIN tbllocation ON tblinfo.Location = tbllocation.Locationid
LEFT JOIN tblhub ON tblinfo.Hub = tblhub.id
SET
    tblinfo.Zone = tblzone.Zonename,
    tblinfo.Region = tblregion.Regionname,
    tblinfo.Location = tblLocation.Locationname,
    tblinfo.Hub = tblhub.Hubname
WHERE
    tblinfo.id = 4;
***************************************************************************************
	 
SELECT
    tblzone.Zonename,
    tblregion.Regionname,
    tbllocation.Locationname,
    tblhub.Hubname
FROM
    (
        (
            tblzone
        INNER JOIN tblregion ON tblzone.Zoneid = tblregion.Zoneid
        )
    INNER JOIN tbllocation ON tblzone.Zoneid = tbllocation.Regionid
    )
INNER JOIN tblhub ON tblzone.Zoneid = tblhub.Locationid

********************************************************************************************

UPDATE
    tblinfo
LEFT JOIN tblzone ON tblinfo.Zone = tblzone.Zoneid
LEFT JOIN tblregion ON tblinfo.Region = tblregion.Regionid
LEFT JOIN tbllocation ON tblinfo.Location = tbllocation.Locationid
LEFT JOIN tblhub ON tblinfo.Hub = tblhub.id
SET
    tblinfo.DName = Director, 
    tblinfo.Zone = tblzone.Zonename,
    tblinfo.Region = tblregion.Regionname,
    tblinfo.Location = tblLocation.Locationname,
    tblinfo.Hub = tblhub.Hubname
WHERE
    tblinfo.id =1