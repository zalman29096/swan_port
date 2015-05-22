#-------------------------------------------------
#
# Project created by QtCreator 2014-10-17T15:49:50
#
#-------------------------------------------------

QT       += core gui


greaterThan(QT_MAJOR_VERSION, 4): QT += widgets

TARGET = work_with_qazip
TEMPLATE = app

#setting up path variables
#QUAZIPCODEDIR - directory where quazip is.
#LIBCODEDIR - directory to zlib. That is for QT5

QUAZIPCODEDIR += "$$PWD/quazip-0.7/quazip"
LIBCODEDIR += "$$PWD/Libs"

#linking compiled zlib for unix and windows respectively

unix {
    LIBS += -L$${LIBCODEDIR} -lz
}

win32 {
    LIBS += -L$${LIBCODEDIR} -lzdll
}

INCLUDEPATH += $${QUAZIPCODEDIR}


DEFINES += QUAZIP_BUILD

#quazip should be static library, so this property is a must

DEFINES += QUAZIP_STATIC

SOURCES += main.cpp\
           mainwindow.cpp

SOURCES += $${QUAZIPCODEDIR}/*.cpp
SOURCES += $${QUAZIPCODEDIR}/*.c


HEADERS += mainwindow.h \
HEADERS += $${QUAZIPCODEDIR}/*.h



FORMS    += mainwindow.ui
