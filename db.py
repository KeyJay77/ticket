import sqlite3
from datetime import datetime

base = sqlite3.connect("database.db")
cur = base.cursor()

cur.execute('DROP TABLE IF EXISTS users')
cur.execute("""CREATE TABLE IF NOT EXISTS users (
    userid INTEGER PRIMARY KEY,
    firstname STRING DEFAULT 'ANTON',
    lastname STRING DEFAULT 'ANTONOV',
    pword STRING,
    email STRING DEFAULT 'anton.antonov@gmail.com'
    )""")
cur.execute('DROP TABLE IF EXISTS tickets')
cur.execute("""CREATE TABLE IF NOT EXISTS tickets (
    matchname STRING,
    stadium STRING,
    matchdate DATETIME,
    sector STRING,
    row INTEGER,
    place INTEGER,
    price INTEGER,
    ownerid INTEGER DEFAULT 0,
    state STRING DEFAULT 'free'
    )""")

matchnames = ["ЦСКА - Ростов", "ЦСКА - Зенит", "ЦСКА - НН",
            "Спартак - Локомотив", "Спартак - Рубин", "Спартак - Ахмат",
            "Динамо - Сочи", "Динамо - Краснодар", "Динамо - Факел"]
stadiums = ["ВЭБ Арена", "Открытие Арена", "ВТБ Арена"]
times = [datetime(2023, 9, 10, 13), datetime(2023, 9, 17, 15), datetime(2023, 9, 24, 14)]
sectors = ["A1", "A2", "A3", "B1", "B2", "B3", "C1", "C2", "C3", "D1", "D2", "D3"]
rows = [i for i in range(10)]
places = [i for i in range(20)]

for i in range(len(matchnames)):
    matchname = matchnames[i]
    stadium = stadiums[i // 3]
    time = times[i % 3]
    for sector in sectors:
        price = 500 if sector[0] in ["A", "C"] else 1000
        for row in rows:
            for place in places:
                query = '''INSERT INTO tickets (matchname, stadium, matchdate, sector, row, place, price) VALUES (?,?,?,?,?,?,?)'''
                cur.execute(query, (matchname, stadium, time, sector, row, place, price))

query = '''INSERT INTO users (userid, firstname, lastname, pword, email) VALUES (?,?,?,?,?)'''
cur.execute(query, (123, "Anton", "Antonov", "123", "email@gmail.com"))

base.commit()

base.close()