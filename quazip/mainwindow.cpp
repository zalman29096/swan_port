#include "mainwindow.h"
#include "ui_mainwindow.h"
#include <qdebug.h>
#include <quazip.h>
#include <QListWidget>
#include <QIODevice>


MainWindow::MainWindow(QWidget *parent) :
    QMainWindow(parent),
    ui(new Ui::MainWindow)
{
    ui->setupUi(this);
}


MainWindow::~MainWindow()
{
    delete ui;
}

QuaZip temp("test.zip"); //creation of quazip object

void MainWindow::on_pushButton_clicked()
{
    temp.open(QuaZip::mdUnzip); //opening file in given mode

    for (bool f = temp.goToFirstFile(); f; f=temp.goToNextFile()){ //loop, going from first to last file in archive
        ui->listWidget->addItem(temp.getCurrentFileName());    //adding a list item with name of current file in archive
    }

    temp.close();
    qDebug() << temp.getZipError(); //debug err. msgs

}
